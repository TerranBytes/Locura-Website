<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Locura CNC And 3D Printing</title>
    <meta name="copyright" content="Copyright 2006-2021. TerranBytes Webhost.">
	<style>
@font-face {
  font-family: 'Denk One';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/denkone/v10/dg4m_pzhrqcFb2IzRNtAr7w.ttf) format('truetype');
}
body {
  background-color: #212121;
}
h1 {
  color: transparent;
  text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
  font-family: 'Denk One', sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 4em;
  text-align: center;
  position: absolute;
  left: 50%;
  top: 35%;
  margin-left: -180px;
  -webkit-animation: horror-animation 5s infinite;
  -moz-animation: horror-animation 5s infinite;
  -o-animation: horror-animation 5s infinite;
  animation: horror-animation 5s infinite;
}
span {
  font-size: 0.4em;
}
@-webkit-keyframes horror-animation {
  0% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    left: 51%;
    top: 36%;
  }
  5% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
    left: 50%;
    top: 35%;
  }
  10% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    left: 49%;
    top: 34%;
  }
  15% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 50%;
    top: 35%;
  }
  16% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  17% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 50%;
  }
  20% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    left: 49%;
  }
  25% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    left: 49%;
  }
  30% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
    left: 50%;
  }
  35% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
    left: 50%;
  }
  36% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  37% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
    left: 50%;
  }
  40% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.9);
    left: 51%;
  }
  45% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
    left: 51%;
  }
  50% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
    left: 51%;
  }
  55% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    left: 50%;
  }
  56% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  57% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    left: 52%;
  }
  60% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    left: 50%;
  }
  65% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 50%;
  }
  70% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    left: 49%;
  }
  75% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
    left: 49%;
  }
  76% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  77% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
    left: 49%;
  }
  80% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.1);
    left: 49%;
  }
  85% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.2);
    left: 51%;
  }
  86% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  87% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.2);
    left: 51%;
  }
  90% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
    left: 51%;
  }
  95% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 51%;
  }
  100% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    left: 50%;
  }
}
@-moz-keyframes horror-animation {
  0% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    left: 51%;
    top: 36%;
  }
  5% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
    left: 50%;
    top: 35%;
  }
  10% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    left: 49%;
    top: 34%;
  }
  15% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 50%;
    top: 35%;
  }
  16% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  17% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 50%;
  }
  20% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    left: 49%;
  }
  25% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    left: 49%;
  }
  30% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
    left: 50%;
  }
  35% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
    left: 50%;
  }
  36% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  37% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
    left: 50%;
  }
  40% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.9);
    left: 51%;
  }
  45% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
    left: 51%;
  }
  50% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
    left: 51%;
  }
  55% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    left: 50%;
  }
  56% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  57% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    left: 52%;
  }
  60% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    left: 50%;
  }
  65% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 50%;
  }
  70% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    left: 49%;
  }
  75% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
    left: 49%;
  }
  76% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  77% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
    left: 49%;
  }
  80% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.1);
    left: 49%;
  }
  85% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.2);
    left: 51%;
  }
  86% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  87% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.2);
    left: 51%;
  }
  90% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
    left: 51%;
  }
  95% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 51%;
  }
  100% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    left: 50%;
  }
}
@-o-keyframes horror-animation {
  0% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    left: 51%;
    top: 36%;
  }
  5% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
    left: 50%;
    top: 35%;
  }
  10% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    left: 49%;
    top: 34%;
  }
  15% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 50%;
    top: 35%;
  }
  16% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  17% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 50%;
  }
  20% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    left: 49%;
  }
  25% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    left: 49%;
  }
  30% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
    left: 50%;
  }
  35% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
    left: 50%;
  }
  36% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  37% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
    left: 50%;
  }
  40% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.9);
    left: 51%;
  }
  45% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
    left: 51%;
  }
  50% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
    left: 51%;
  }
  55% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    left: 50%;
  }
  56% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  57% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    left: 52%;
  }
  60% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    left: 50%;
  }
  65% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 50%;
  }
  70% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    left: 49%;
  }
  75% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
    left: 49%;
  }
  76% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  77% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
    left: 49%;
  }
  80% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.1);
    left: 49%;
  }
  85% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.2);
    left: 51%;
  }
  86% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  87% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.2);
    left: 51%;
  }
  90% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
    left: 51%;
  }
  95% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 51%;
  }
  100% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    left: 50%;
  }
}
@keyframes horror-animation {
  0% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    left: 51%;
    top: 36%;
  }
  5% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
    left: 50%;
    top: 35%;
  }
  10% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    left: 49%;
    top: 34%;
  }
  15% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 50%;
    top: 35%;
  }
  16% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  17% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 50%;
  }
  20% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    left: 49%;
  }
  25% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    left: 49%;
  }
  30% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
    left: 50%;
  }
  35% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
    left: 50%;
  }
  36% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  37% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
    left: 50%;
  }
  40% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.9);
    left: 51%;
  }
  45% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
    left: 51%;
  }
  50% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
    left: 51%;
  }
  55% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    left: 50%;
  }
  56% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  57% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
    left: 52%;
  }
  60% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    left: 50%;
  }
  65% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 50%;
  }
  70% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    left: 49%;
  }
  75% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
    left: 49%;
  }
  76% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  77% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
    left: 49%;
  }
  80% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.1);
    left: 49%;
  }
  85% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.2);
    left: 51%;
  }
  86% {
    text-shadow: 0 0 5px #212121;
    left: 50%;
  }
  87% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.2);
    left: 51%;
  }
  90% {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
    left: 51%;
  }
  95% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    left: 51%;
  }
  100% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    left: 50%;
  }
}

</style>
</head>
<body>
   <h1>Locura CNC<br><span>Coming soon</span></h1>
</body>
</html>
