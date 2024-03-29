<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
  @font-face {
    font-family: 'THSarabunNew';
    font-style: normal;
    font-weight: normal;
    src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
  }

  @font-face {
    font-family: 'THSarabunNew';
    font-style: normal;
    font-weight: bold;
    src: url("{{ asset('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
  }

  @font-face {
    font-family: 'THSarabunNew';
    font-style: italic;
    font-weight: normal;
    src: url("{{ asset('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
  }

  @font-face {
    font-family: 'THSarabunNew';
    font-style: italic;
    font-weight: bold;
    src: url("{{ asset('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
  }

  body {
    font-family: "THSarabunNew", "DejaVu Sans Mono", monospace;
    font-size: 16px;
  }

  @page {
    size: A4;
    padding: 15px;
  }

  @media print {

    html,
    body {
      width: 210mm;
      height: 297mm;
      font-size: 20px;
    }
  }
</style>