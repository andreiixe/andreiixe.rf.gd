<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.min.css">
    <link rel="icon" type="image/x-icon" href="image/justanime.png">
    <link rel="stylesheet" href="stylesmr.css">
    <title>Andreiixe</title>
    <meta name="title" content="Andreiixe">
    <meta name="author" content="Andrei">
    <meta name="description" content="Yo! My personal website">
    </head>
    <body>
        <?php
        $NameWebsite = "Andreiixe";
        $Description = "Yo! Welcome to my personal website";
        echo "
        <section class='section section-1'>
        <div class='container noselect'>
            <div class='container has-text-centered'>
                <center><img class='avatar' src='image/Avatar.png'></center>
            </div>
            <p class='intro'></p>
            <div align='center'>
                <h1>
                    <span>
                        <span>
                            $NameWebsite
                        </span>
                    </span>
                </h1>
                <br>
                <a href='https://github.com/andreiixe' class='button' rel='noreferrer'>
                    <svg width='24px' height='24px' viewBox='0 0 24 24' fill='white'>
                        <path d='M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z'></path>
                      </svg>
                    <button-text>&nbsp;&nbsp;Github</button-text>
                </a>
                <a href='mailto:akaiandrei825@gmail.com' class='button' rel='noreferrer'>
                    <svg width='24px' height='24px' viewBox='0 0 24 24' fill='white'>
                        <path d='M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z'></path>
                      </svg>
                    <button-text>&nbsp;&nbsp;Email</button-text>
                </a>
                <a href='https://www.instagram.com/andreiixe/' class='button' rel='noreferrer'>
                    <svg width='24px' height='24px' viewBox='0 0 256 256' fill='white'>
                        <g>
                            <path d='M127.999746,23.06353 C162.177385,23.06353 166.225393,23.1936027 179.722476,23.8094161 C192.20235,24.3789926 198.979853,26.4642218 203.490736,28.2166477 C209.464938,30.5386501 213.729395,33.3128586 218.208268,37.7917319 C222.687141,42.2706052 225.46135,46.5350617 227.782844,52.5092638 C229.535778,57.0201472 231.621007,63.7976504 232.190584,76.277016 C232.806397,89.7746075 232.93647,93.8226147 232.93647,128.000254 C232.93647,162.177893 232.806397,166.225901 232.190584,179.722984 C231.621007,192.202858 229.535778,198.980361 227.782844,203.491244 C225.46135,209.465446 222.687141,213.729903 218.208268,218.208776 C213.729395,222.687649 209.464938,225.461858 203.490736,227.783352 C198.979853,229.536286 192.20235,231.621516 179.722476,232.191092 C166.227425,232.806905 162.179418,232.936978 127.999746,232.936978 C93.8200742,232.936978 89.772067,232.806905 76.277016,232.191092 C63.7971424,231.621516 57.0196391,229.536286 52.5092638,227.783352 C46.5345536,225.461858 42.2700971,222.687649 37.7912238,218.208776 C33.3123505,213.729903 30.538142,209.465446 28.2166477,203.491244 C26.4637138,198.980361 24.3784845,192.202858 23.808908,179.723492 C23.1930946,166.225901 23.0630219,162.177893 23.0630219,128.000254 C23.0630219,93.8226147 23.1930946,89.7746075 23.808908,76.2775241 C24.3784845,63.7976504 26.4637138,57.0201472 28.2166477,52.5092638 C30.538142,46.5350617 33.3123505,42.2706052 37.7912238,37.7917319 C42.2700971,33.3128586 46.5345536,30.5386501 52.5092638,28.2166477 C57.0196391,26.4642218 63.7971424,24.3789926 76.2765079,23.8094161 C89.7740994,23.1936027 93.8221066,23.06353 127.999746,23.06353 M127.999746,0 C93.2367791,0 88.8783247,0.147348072 75.2257637,0.770274749 C61.601148,1.39218523 52.2968794,3.55566141 44.1546281,6.72008828 C35.7374966,9.99121548 28.5992446,14.3679613 21.4833489,21.483857 C14.3674532,28.5997527 9.99070739,35.7380046 6.71958019,44.1551362 C3.55515331,52.2973875 1.39167714,61.6016561 0.769766653,75.2262718 C0.146839975,88.8783247 0,93.2372872 0,128.000254 C0,162.763221 0.146839975,167.122183 0.769766653,180.774236 C1.39167714,194.398852 3.55515331,203.703121 6.71958019,211.845372 C9.99070739,220.261995 14.3674532,227.400755 21.4833489,234.516651 C28.5992446,241.632547 35.7374966,246.009293 44.1546281,249.28042 C52.2968794,252.444847 61.601148,254.608323 75.2257637,255.230233 C88.8783247,255.85316 93.2367791,256 127.999746,256 C162.762713,256 167.121675,255.85316 180.773728,255.230233 C194.398344,254.608323 203.702613,252.444847 211.844864,249.28042 C220.261995,246.009293 227.400247,241.632547 234.516143,234.516651 C241.632039,227.400755 246.008785,220.262503 249.279912,211.845372 C252.444339,203.703121 254.607815,194.398852 255.229725,180.774236 C255.852652,167.122183 256,162.763221 256,128.000254 C256,93.2372872 255.852652,88.8783247 255.229725,75.2262718 C254.607815,61.6016561 252.444339,52.2973875 249.279912,44.1551362 C246.008785,35.7380046 241.632039,28.5997527 234.516143,21.483857 C227.400247,14.3679613 220.261995,9.99121548 211.844864,6.72008828 C203.702613,3.55566141 194.398344,1.39218523 180.773728,0.770274749 C167.121675,0.147348072 162.762713,0 127.999746,0 Z M127.999746,62.2703115 C91.698262,62.2703115 62.2698034,91.69877 62.2698034,128.000254 C62.2698034,164.301738 91.698262,193.730197 127.999746,193.730197 C164.30123,193.730197 193.729689,164.301738 193.729689,128.000254 C193.729689,91.69877 164.30123,62.2703115 127.999746,62.2703115 Z M127.999746,170.667175 C104.435741,170.667175 85.3328252,151.564259 85.3328252,128.000254 C85.3328252,104.436249 104.435741,85.3333333 127.999746,85.3333333 C151.563751,85.3333333 170.666667,104.436249 170.666667,128.000254 C170.666667,151.564259 151.563751,170.667175 127.999746,170.667175 Z M211.686338,59.6734287 C211.686338,68.1566129 204.809755,75.0337031 196.326571,75.0337031 C187.843387,75.0337031 180.966297,68.1566129 180.966297,59.6734287 C180.966297,51.1902445 187.843387,44.3136624 196.326571,44.3136624 C204.809755,44.3136624 211.686338,51.1902445 211.686338,59.6734287 Z' fill='white'></path>
                        </g>
                    </svg>
                    <button-text>&nbsp;&nbsp;Instagram</button-text>
                </a>
                <a href='https://www.facebook.com/andreiixe/' class='button' target='_blank' rel='noreferrer'>
                        <svg fill='white' viewBox='0 0 30 30' width='30px' height='30px'>    
                        <path d='M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z'/></svg>
                    <button-text>&nbsp;&nbsp;Facebook</button-text>
                </a>
            </div>
            <br>
            <div align='center'>
                <subtitle>
                    $Description
                </subtitle>
                <br>
                <br>
                <subtitle-2>
                    I love make
                    <span style='background-color:rgba(7, 59, 79, 0.5);color:white;font-weight:bold;font-size:1em;border: 1px solid rgba(7, 59, 79, 0.5);border-radius: 5px;'>
                        &nbsp;Photography&nbsp;</span>
                    and
                    <span style='background-color:rgba(7, 59, 79, 0.5);color:white;font-weight:bold;font-size:1em;border: 1px solid rgba(7, 59, 79, 0.5);border-radius: 5px;'>
                        &nbsp;Web development&nbsp;</span>
                    </subtitle-2>
        </div>
    </section>
    <section class='section section-3'>
        <div align='center'>
            <div class='column'>
                <div class='box project-text'>
                    <div class=;column noselect'>
                        <div class='project-text noselect'>
                          <a href='https://github.com/andreiixe/andreiixe.rf.gd' rel='noreferrer'>
                            <table>
                              <tbody>
                                <tr><td style='vertical-align:middle'>
                                  <div align='center'>
                                    <img style='border-radius: 10%;' src='image/updateandre.png' width='60%'>
                                  </div>
                                </td>
                                <td width='60%' style='vertical-align:middle' class='center-mobile'>
                                  <div style='font-size: 1.5em; font-weight: bold;'>
                                    <p>Source Code Website</p>
                                  </div>
                                  <div style='margin-top: 5px;'>
                                    <span style='background-color:rgba(79, 7, 7, 0.5);color:white;font-weight:bold;font-size:0.8em;border: 1px solid rgba(79, 7, 7, 0.5);border-radius: 5px;'>&nbsp;HTML&nbsp;</span>
                                    <span style='background-color:rgba(79, 7, 7, 0.5);color:white;font-weight:bold;font-size:0.8em;border: 1px solid rgba(79, 7, 7, 0.5);border-radius: 5px;'>&nbsp;CSS&nbsp;</span>
                                  </div>
                                  <div style='margin-top: 5px;'>
                                    <p>Here you can see any change from the website code and you can download</p>
                                  </div>
                                  <div style='margin-top: 5px; font-size:0.8em;'>
                                    <p><i>(I make updates as I can)</i></p>
                                  </div>
                                </td>
                              </tr></tbody>
                            </table>
                          </a>
                        </div>
                      </div>                 
                </div>
              </div>
              <br>
           
        </div>
        <br>
        <center><footer>
            <p style='font-size: 10px;color: rgb(52, 52, 52);'>Andreiixe website Build 2016 (stable)</p>
        </footer></center>
    </section>"
    ?>
    
    </body>
</html>