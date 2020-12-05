<?php

?>
<html>
    <head>
        <title>Sócios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .card {
                
  background: white;
  border-radius: 8px;
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
  cursor: pointer;
  height: 100px;
  margin: 20px;
  padding: 0 20px;
  position: relative;
  -webkit-tap-highlight-color: rgba(0,0,0,0.025);
  text-align: center;
  transition: height 1000ms;
  width: 260px;
  z-index: 1;
}
@media (max-width: 767px) {
  .card {
    left: calc(50% - 20px);
    transform: translateX(-50%);
    position: relative;
    z-index: 1;
  }
}
.card.expanded {
    margin-top: 2em;
  height: 280px;
}
p{
     color:  #03b5d2;
}
.label {
     color:  #03b5d2;
  margin-top: 100px;
  transform: translateY(10px);
  transition: transform 1000ms;
}
.card.expanded .label {
  transform: translateY(0);
}
.text1 {
  clip-path: polygon(0% 100%, 0 -90%, 50% -5%, 100% -90%, 100% 100%);
  -webkit-clip-path: polygon(0% 100%, 0 -90%, 50% -5%, 100% -90%, 100% 100%);
  transition: clip-path 1000ms;
}
.card.expanded .text1 {
  clip-path: polygon(0% 100%, 0 -100%, 50% -15%, 100% -100%, 100% 100%);
  -webkit-clip-path: polygon(0% 100%, 0 -100%, 50% -15%, 100% -100%, 100% 101%);
}
.text2 {
  clip-path: polygon(0% 100%,0% -80%,15% -70%,17.23% -53.59%,23% -40%,27.23% -28.94%,35% -20%,41.09% -13.59%,50% -10%,58.91% -13.23%,65% -20%,72.77% -28.23%,77% -40%,82.77% -54.65%,85% -70%,100% -80%,100% 100%);
  -webkit-clip-path: polygon(0% 100%,0% -80%,15% -70%,17.23% -53.59%,23% -40%,27.23% -28.94%,35% -20%,41.09% -13.59%,50% -10%,58.91% -13.23%,65% -20%,72.77% -28.23%,77% -40%,82.77% -54.65%,85% -70%,100% -80%,100% 100%);
  transition: clip-path 1000ms;
}
.card.expanded .text2 {
  clip-path: polygon(0% 100%,0% -90%,15% -80%,17.23% -63.59%,23% -50%,27.23% -38.94%,35% -30%,41.09% -23.59%,50% -20%,58.91% -23.23%,65% -30%,72.77% -38.23%,77% -50%,82.77% -64.65%,85% -80%,100% -90%,100% 100%);
  -webkit-clip-path: polygon(0% 100%,0% -90%,15% -80%,17.23% -63.59%,23% -50%,27.23% -38.94%,35% -30%,41.09% -23.59%,50% -20%,58.91% -23.23%,65% -30%,72.77% -38.23%,77% -50%,82.77% -64.65%,85% -80%,100% -90%,100% 100%);
}
.text-content {
 
  padding-top: 20px;
  transform: translateY(-140px);
  transition: transform 1000ms;
}
.card.expanded .text-content {
  transform: translateY(-15px);
}
.chevron {
  position: absolute;
  bottom: 20px;
  left: calc(50% - 15px);
  transform-origin: 50%;
  transform: rotate(180deg);
  transition: transform 1000ms;
}
.card.expanded .chevron {
  transform: rotate(0deg);
}
cite{
   
    margin-top: 30px;
    word-break: break-all; 
}
        </style>
    </head>
    <body>
    
    <div class="card" onclick="this.classList.toggle('expanded')" id="pergunta">
                <br/>
                <p>Quais as formas de pagamento?</p>
                  <div class="text1">
                      <div class="text-content">
                          <cite> PERGUNTA GRANMDDDDDDDDDDDDDDDDDDDDDD
                              
                          </cite>
                      </div>
                </div>
    
 </div>
</body>

</html>
