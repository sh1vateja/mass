<html>

<head>

  <title>SK BASED x TEAM HYPER</title>
  
  <link href="style.css" rel="stylesheet" id="bootstrap-css">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="hyper.min.css?v=2.3">
  <link
    rel="stylesheet"
    
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <style>
  nav.navbar.navbar-expand-lg.navbar-light.bg-light {
    padding: 1px;
    background: transparent !important;
    box-shadow: none;
}
  select#curr {
    padding: 9px;
    font-family: var(--hyper-font)!important;
    border: none;
    font-weight: 400;
    -webkit-text-fill-color: #d5ddd5;
    background: #18191e!important;
    box-shadow: 0 1px 2px #0000005c;
    border-bottom: solid 1px;
  }
  textarea#lista {
    margin-top: 15px;
    font-family: "Bebas Neue";
    background: #1a1b20!important;
  }
  .logo_large_med {
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 2px;
    font-family: monospace;
    background: linear-gradient(45deg,#12ff00,#28a743);
  }
  input.form-control.hyper_input {
    font-family: var(--hyper-font)!important;
    border: none;
    padding-bottom: 4px;
    font-weight: 400;
    -webkit-text-fill-color: #d5ddd5;
    background: #1d1e24!important;
    box-shadow: 0 1px 2px #0000005c;
    border-bottom: solid 1px;
    border-image: linear-gradient(45deg,#12ff00,#28a743) 1;
}
nav.navbar.navbar-expand-lg.navbar-light.bg-light {
    padding: 1px;
    background: #18191e!important;
    box-shadow: none;
}
textarea#lista {
    margin-top: 15px;
    font-family: "Bebas Neue";
    background: #1d1e24!important;
    border-bottom: solid 1px!important;
    border: none;
    border-radius: 0;
    color: #fff!important;
    -webkit-text-fill-color: #fff;
    box-shadow: 0 1px 2px #0000005c;
    border-image: linear-gradient(45deg,#12ff00,#28a743) 1;}
  a.nav-link.addbot {
    color: #f35205!important;
    background: transparent;
    padding: 3px 0 0;
    border: none;
    border-radius: 1px;
    margin-top: 5px;
}
  .card-body.cvv.form-login {
    margin-top: 0;
    background: #18191e!important;
    padding: 0 19px;
  }
  
  button#mostra4,button#mostra,button#mostra3,button#mostra2 {
    font-size: 17px;
    margin: 17px 40px;
  }
      .card-body {
    -ms-flex: 1 1 auto;
    background-color: #1c1e24!important;
    flex: 1 1 auto;
    padding: 1.25rem;
    border-top: none;
    border-image: linear-gradient(80deg,#4b00ff,#ef1450) 1;
    box-shadow: 0 1px 3px #00000040;
}
.logo_large_med{
    margin-top:20px;
}
 
 
    body {
      margin: 0;
      font-family: "Bebas Neue";
      padding: 0;
    }

    .no-padding-container {
      padding-left: 0;
      padding-right: 0;
      max-width: 100%;
    }

    .card {
      margin: 0;
    }

    .row.no-gutters {
      margin-left: 0;
      margin-right: 0;
    }

    .col-no-padding {
      padding-left: 0;
      padding-right: 0;
    }
.starboy {
  display: flex;
  justify-content: center;
  align-items: center;
  
  font-size: 26px;
}
    textarea {
      resize: vertical;
    }
    
  </style>
</head>
<body>
<br><br>
	
<div class="starboy">STARBOY™</div>
  <div class="container-fluid no-padding-container my-3">
    <!-- Input Section -->
    <div class="row no-gutters justify-content-center mb-3">
      <div class="col-12">
        <div class="card">
          <div class="card-body cvv mchk form-login">
            <div class="row justify-content-center mb-3">
              <div id="tbar" class="text-center w-100">
                <span>CVV</span>&nbsp;
                <span id="cLive" class="badge badge-success">0</span>&nbsp;

                <span>Completed</span>&nbsp;
                <span id="total" class="badge badge-info">0</span>&nbsp;

                <span>Total</span>&nbsp;
                <span id="carregadas" class="badge badge-dark">0</span>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-12">
                <textarea id="lista" class="form-control" rows="4" placeholder="Drop Cards Here"></textarea>
              </div>
            </div>

            <div class="row">
  <div class="col-12 text-center">
    <button id="testar" class="btn btn-success" onclick="start_hyper()"><b>Start</b></button>
  </div>
</div>
            </div>
          </div>
        </div>
      </div>
    


    <div class="col-md-12">
      <div class="card wd hyper_dead">
        <div class="pos5">
          <button id="mostra2" class="btn btn-danger">Show</button><br>
        </div>
        <div class="pos6">
        </div>
        <div class="card-body hyper_dead">

          <h6 class="card-title">results - <span id="cDie2" class="badge badge-danger">0</span></h6>
          <div id="bode2"><span id=".reprovadas" class="reprovadas"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <script src="./script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="./tata.js"></script>
  <script src="./hyper.min.js?v=2.5"></script>



  <footer>


  </footer>
</body>

</html>