<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonAuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function random_salt($length)
    {
        $possible = '0123456789' .
            'abcdefghijklmnopqrstuvwxyz' .
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ' .
            './';
        $str = "";
        mt_srand((float) microtime() * 1000000);

        while (strlen($str) < $length)
            $str .= substr($possible, (rand() % strlen($possible)), 1);
        return $str;
    }

    public function password_hashs($password_clear, $enc_type)
    {
        global $lang;
        $enc_type = strtolower($enc_type);

        switch ($enc_type) {
            case 'crypt':
                $new_value = '{CRYPT}' . crypt($password_clear, random_salt(2));
                break;
            case 'ext_des':
                if (!defined('CRYPT_EXT_DES') || CRYPT_EXT_DES == 0)
                    pla_error($lang['install_not_support_ext_des']);

                $new_value = '{CRYPT}' . crypt($password_clear, '_' . random_salt(8));
                break;
            case 'md5crypt':
                if (!defined('CRYPT_MD5') || CRYPT_MD5 == 0)
                    pla_error($lang['install_not_support_md5crypt']);

                $new_value = '{CRYPT}' . crypt($password_clear, '$1$' . random_salt(9));
                break;
            case 'blowfish':
                if (!defined('CRYPT_BLOWFISH') || CRYPT_BLOWFISH == 0)
                    pla_error($lang['install_not_support_blowfish']);

                $new_value = '{CRYPT}' . crypt($password_clear, '$2a$12$' . random_salt(13));
                break;
            case 'md5':
                $new_value = '{MD5}' . base64_encode(pack('H*', md5($password_clear)));
                break;
            case 'sha':
                if (function_exists('sha1')) {
                    $new_value = '{SHA}' . base64_encode(pack('H*', sha1($password_clear)));
                } elseif (function_exists('mhash')) {
                    $new_value = '{SHA}' . base64_encode(mhash(MHASH_SHA1, $password_clear));
                } else {
                    pla_error($lang['install_no_mash']);
                }
                break;
            case 'ssha':
                if (function_exists('mhash') && function_exists('mhash_keygen_s2k')) {
                    mt_srand((float) microtime() * 1000000);
                    $salt = mhash_keygen_s2k(MHASH_SHA1, $password_clear, substr(pack("h*", md5(mt_rand())), 0, 8), 4);
                    $new_value = "{SSHA}" . base64_encode(mhash(MHASH_SHA1, $password_clear . $salt) . $salt);
                } else {
                    pla_error($lang['install_no_mash']);
                }
                break;
            case 'smd5':
                if (function_exists('mhash') && function_exists('mhash_keygen_s2k')) {
                    mt_srand((float) microtime() * 1000000);
                    $salt = mhash_keygen_s2k(MHASH_MD5, $password_clear, substr(pack("h*", md5(mt_rand())), 0, 8), 4);
                    $new_value = "{SMD5}" . base64_encode(mhash(MHASH_MD5, $password_clear . $salt) . $salt);
                } else {
                    pla_error($lang['install_no_mash']);
                }
                break;

            case 'clear':
            default:
                $new_value = $password_clear;
        }
        return $new_value;
    }

    public function password_check($cryptedpassword, $plainpassword)
    {
        if (preg_match("/{([^}]+)}(.*)/", $cryptedpassword, $cypher)) {
            $cryptedpassword = $cypher[2];
            $_cypher = strtolower($cypher[1]);
        } else {
            $_cypher = NULL;
        }
        switch ($_cypher) {
            case 'ssha':
                if (function_exists('mhash')) {
                    $hash = base64_decode($cryptedpassword);
                    $salt = substr($hash, -4);
                    $new_hash = base64_encode(mhash(MHASH_SHA1, $plainpassword . $salt) . $salt);
                    if (strcmp($cryptedpassword, $new_hash) == 0)
                        return true;
                    else
                        return false;
                } else {
                    pla_error($lang['install_no_mash']);
                }
                break;
            case 'smd5':
                if (function_exists('mhash')) {
                    $hash = base64_decode($cryptedpassword);
                    $salt = substr($hash, -4);
                    $new_hash = base64_encode(mhash(MHASH_MD5, $plainpassword . $salt) . $salt);
                    if (strcmp($cryptedpassword, $new_hash) == 0)
                        return true;
                    else
                        return false;
                } else {
                    pla_error($lang['install_no_mash']);
                }
                break;
            case 'sha':
                if (strcasecmp(password_hashs($plainpassword, 'sha'), "{SHA}" . $cryptedpassword) == 0)
                    return true;
                else
                    return false;
                break;
            case 'md5':
                if (strcasecmp(password_hashs($plainpassword, 'md5'), "{MD5}" . $cryptedpassword) == 0)
                    return true;
                else
                    return false;
                break;
            case 'crypt':
                if (preg_match("/^\\$2+/", $cryptedpassword)) {
                    if (!defined('CRYPT_BLOWFISH') || CRYPT_BLOWFISH == 0)
                        pla_error($lang['install_not_support_blowfish']);

                    list(, $version, $rounds, $salt_hash) = explode('$', $cryptedpassword);
                    if (crypt($plainpassword, '$' . $version . '$' . $rounds . '$' . $salt_hash) == $cryptedpassword)
                        return true;
                    else
                        return false;
                } elseif (strstr($cryptedpassword, '$1$')) {
                    if (!defined('CRYPT_MD5') || CRYPT_MD5 == 0)
                        pla_error($lang['install_not_support_md5crypt']);
                    list(, $type, $salt, $hash) = explode('$', $cryptedpassword);
                    if (crypt($plainpassword, '$1$' . $salt) == $cryptedpassword)
                        return true;
                    else
                        return false;
                } elseif (strstr($cryptedpassword, '_')) {
                    if (!defined('CRYPT_EXT_DES') || CRYPT_EXT_DES == 0)
                        pla_error($lang['install_not_support_ext_des']);
                    if (crypt($plainpassword, $cryptedpassword) == $cryptedpassword)
                        return true;
                    else
                        return false;
                } else {
                    if (crypt($plainpassword, $cryptedpassword) == $cryptedpassword)
                        return true;
                    else
                        return false;
                }
                break;
            default:
                if ($plainpassword == $cryptedpassword)
                    return true;
                else
                    return false;
                break;
        }
    }

    public function checklogin(Request $request)
    {
        $ldaphost = "10.20.1.190";  // your ldap servers
        $Basedn = "ou=users,dc=tsu,dc=ac,dc=th";
        $ldapport = 389;
        $login = $request->username;
        $password = $request->password;

        $ds = ldap_connect($ldaphost, $ldapport) or die("Could not connect to $ldaphost");
        if ($ds) {

            $r = ldap_bind($ds);
            $uname = $login;
            $groupid = "230";
            $gidnumber = $groupid;
            $dn = $Basedn;    //edit
            $filter = "(&(cn=$uname))";
            $justthese = array("ou", "sn", "cn", "gidnumber", "userpassword");
            $sr = ldap_search($ds, $dn, $filter, $justthese);
            $info = ldap_get_entries($ds, $sr);
            ldap_count_entries($ds, $sr);
            $info = ldap_get_entries($ds, $sr);
            ldap_close($ds);
        } else {

            return redirect()->back()->with('error','ไม่สามารถติดต่อ LDAP Server ได้');
        }

        if ($info['count'] != 0) {

            if (self::password_check($info[0]["userpassword"][0], $password)) {
                $student = Person::where('ipass','=', $login)->get();
                if ($student) {
                    $request->session()->put('ipass', $login);
                    return redirect('office/home');
                }else{
                    return redirect()->back()->with('error','ไม่มีรหัสนิสิต '.$login.' ในฐานข้อมูลนิสิตคณะวิทยาศาสตร์');
                }
            } else {
                return redirect()->back()->with('error','รหัสนิสิตหรือรหัสผ่านไม่ถูกต้อง');
            }
        } else {
            return redirect()->back()->with('error','รหัสนิสิตหรือรหัสผ่านไม่ถูกต้อง');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('ipass');
        return redirect('/');
    }
}
