<link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
<link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
<link rel="stylesheet" href="{{asset('assets/css/cs-skin-elastic.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

<style>
#weatherWidget .currentDesc {
    color: #ffffff !important;
}

.traffic-chart {
    min-height: 335px;
}

#flotPie1 {
    height: 150px;
}

#flotPie1 td {
    padding: 3px;
}

#flotPie1 table {
    top: 20px !important;
    right: -10px !important;
}

.content {
    left: 20%;

}


.chart-container {
    display: table;
    min-width: 270px;
    text-align: left;
    padding-top: 10px;
    padding-bottom: 10px;
}

#flotLine5 {
    height: 105px;
}

#flotBarChart {
    height: 150px;
}

#cellPaiChart {
    height: 160px;
}

body {
    background-color: rgb(44, 43, 43);
    font-family: "Roboto Mono", monospace;
    scroll-behavior: smooth;
    transition: 0.5s;
}

.text-light {
    color: black !important;
}

.card-body:hover {
    color: white;
    background-color: rgb(44, 43, 43);
    transition: 0.5s;
    box-shadow: 7px 7px 0px 0px rgba(74, 147, 196, 1);
    border: 1px solid rgb(216, 215, 215);
    z-index: 2;
}

.card-body-light:hover {
    color: rgb(44, 43, 43) !important;
    background-color: white !important;
}

.btn:hover {
    outline: none;
    border: none;
}

#example textarea {
    padding: 5px 5px 5px 5px;
}

.box {
    width: 100%;
}

.box textarea {
    width: 100%;
    height: 80%;
}

.light-mode {
    background: white !important;
    color: black !important;
}

.light-mode::placeholder {
    color: black;
}

.textarea:focus,
.textarea:active,
.textarea:hover {
    color: white;
    background-color: rgb(44, 43, 43);
    transition: 0.5s;
    box-shadow: 8px 8px 0px 1px rgba(255, 255, 255, 0.623);
    border: 1px solid grey;
    font-family: "Roboto Mono", monospace;
}

.textarea {
    color: black;
    font-family: "Roboto Mono", monospace;
    background-color: rgb(216, 215, 215);
    transition: 0.3s;
    width: 80%;
}

.title {
    background: none;
    border: none;
    border-bottom: 1px solid white;
    width: 80%;
    transition: 0.3s;
    color: white;
}

.title:focus {
    outline: none;
    transition: 0.3s;
    border-bottom: 1px solid grey;
}

.container {
    color: white;
}

.navbar a:hover {
    border-bottom: 1px solid white;
    transition: ease-out 0.3s;
}

.hover-light a:hover {
    border-bottom: 1px solid black !important;
}

p {
    word-wrap: break-word;
}

.navbar a {
    margin-top: -10%;
    margin-left: 1%;
}

.card-body {
    color: rgb(44, 43, 43);
    transition: 0.4s;
    background-color: rgb(216, 215, 215);
    text-align: left;
    line-height: 2.7ch;
    position: relative;
    z-index: 1;
}

.card-body-light {
    color: white !important;
    background-color: rgb(44, 43, 43) !important;
}

.navbar {
    color: white;
}

.cards a {
    text-decoration: none;
}

a {
    text-decoration: none;
    color: inherit;
}

a:hover {
    color: inherit;
    text-decoration: none;
}

.card-title {
    font-weight: bolder;
}

.navbar-brand {
    font-size: 2rem;
    letter-spacing: 0.2rem;
}

.btn:focus {
    border: none;
}

.left-panel {
    position: fixed;
    left: 0;
    z-index: 4;
    width: 15%;
    padding: 2rem 0;
    border-right: 1px solid white;
    height: 100%;
}

.right-panel {
    position: absolute;
    width: 75%;
    right: 0;
    margin: 0 4rem;
}

.navbar hr {
    border-top: 1px solid white !important;
    height: 4px;
    width: 100%;
}

.right-panel hr {
    border-top: 1px solid white !important;
    height: 4px;
    width: 100%;
    margin: 0 0;
}

.left-panel .btn {
    width: 100%;
}

.left-panel a:hover {
    border: none;
}


.drop-down {
    color: rgb(44, 43, 43);
    transition: 0.4s;
    background-color: rgb(216, 215, 215);
    text-align: center;
}

.drop-down:hover {
    background-color: rgb(44, 43, 43);
    transition: 0.5s;
    color: rgb(216, 215, 215);
    box-shadow: 7px 7px 0px 0px rgba(74, 147, 196, 1);
    border: 1px solid rgb(216, 215, 215);
}

.dropdown-itemx {
    text-align: center;
    padding: 5px 2.3rem;
    display: block;
    text-align: inherit;
    color: inherit;
    position: absolute;
    width: fit-content;
}

table,
th,
td {
    border-color: rgb(44, 43, 43) !important;
}

table:hover,
th:hover,
td:hover {
    border-color: white;
}
</style>