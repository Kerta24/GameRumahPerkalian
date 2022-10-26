<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game Rumah Perkalian</title>
  <script src="https://unpkg.com/gridjs/dist/gridjs.production.min.js"></script>
  <link href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />
  {{-- <link rel="stylesheet" href="style.css"> --}}
</head>

<body>
  {{-- <div id="table-gridjs"></div>

  <script>
    
    new gridjs.Grid({
    //     search: true,
    //   sort: false,
    //   pagination: {
    //     limit: 9
    //   },
      columns: ["", "", "", "", "", "", "", "", ""],
      data: [
        ["2", "21", "58", "10", "42", "15", "24", "72", "4"],
        ["42", "18", "81", "30", "32", "9", "48", "8", "54"],
        ["27", "35", "28", "6", "12", "56", "20", "35", "3"],
        ["55", "7", "63", "29", "31", "16", "5", "60", "59"],
        ["70", "65", "45", "36", "1", "69", "40", "78", "80"],
        ["14", "49", "86", "68", "75", "64", "87", "66", "22"],
        ["11", "79", "71", "62", "53", "74", "34", "41", "47"],
        ["76", "13", "16", "28", "36", "78", "14", "46", "80"],
        ["45", "58", "42", "46", "42", "55", "25", "30", "40"],
      ]
    }).render(document.getElementById("table-gridjs"));
  </script> --}}
  {{-- <div class="table-responsive-sm">
    <table class="table table-stripped grid-1">
      <tbody>
        <tr>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
        </tr>
        <tr>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
        </tr>
        <tr>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
        </tr>
        <tr>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
        </tr>
        <tr>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
        </tr>
        <tr>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
        </tr>
        <tr>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
        </tr>
        <tr>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
        </tr>
        <tr>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
            <td value="2">2</td>
        </tr>
      </tbody>
    </table>
  </div> --}}

  {{-- <div class="support-grid"></div>

  <section class="grid-1">
    <div class="item-1">1</div>
    <div class="item-2">2</div>
    <div class="item-3">3</div>
    <div class="item-4">4</div>
    <div class="item-5">5</div>
    <div class="item-6">6</div>
    <div class="item-7">7</div>
    <div class="item-8">8</div>
    <div class="item-9">9</div>
    <div class="item-10">10</div>
    <div class="item-10">1</div>
    <div class="item-11">2</div>
    <div class="item-12">3</div>
    <div class="item-13">4</div>
    <div class="item-14">5</div>
    <div class="item-15">6</div>
    <div class="item-16">7</div>
    <div class="item-17">8</div>
    <div class="item-18">9</div>
  </section> --}}

  <main class="background">
    <section class="title">
        <h1>Game Perkalian Kerta</h1>
    </section>

    <section class="display">
        Player <span class="display-player playerX">X</span>'s turn
    </section>

    <section class="container">
        <div class="tile"></div>
        <div class="tile"></div>
        <div class="tile"></div>
        <div class="tile"></div>
        <div class="tile"></div>
        <div class="tile"></div>
        <div class="tile"></div>
    </section>
    <section class="display announcer hide"></section>

    <section class="controls">
        <button id="reset">reset</button>

    </section>
  </main>

</body>

</html> 