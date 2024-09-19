<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Fantasy</title>
    <link rel="stylesheet" href="{{ asset('css/Fantasie.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:300,400,700" />

</head>

<body>
    <header>
        <h1>Football Fantasy League</h1>
    </header>
    <div class="container">
        <section class="players">
            <h2>Choose Your Players</h2>
            <div class="player-list">
                <a href="#" class="pl-bay">
                    <div class="bay-situation">
                        <img src="https://www.veryicon.com/download/png/miscellaneous/logo-design-of-lingzhuyun/icon-correct-24-1?s=256"
                            alt="">
                    </div>
                    <div class="bay-team">
                        <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                            alt="">
                    </div>
                    <div class="bay-name">PLAYER </div>
                    <h2>10.2£</h2>
                    <h2>152</h2>
                </a>
            </div>
        </section>
        <div class="team-list">
            <nav class="team-nave">
                <ul>
                    <li>W-1</li>
                    <li>W-2</li>
                    <li>W-3</li>
                    <li>W-4</li>
                </ul>
                <div class="dedline">
                    <h3>Deadline-5/52-20:00</h3>
                    <div class="sec-center">
                        <input class="dropdown" type="checkbox" id="dropdown" name="dropdown" />
                        <label class="for-dropdown" id="vu" for="dropdown">4-3-3<i
                                class="uil uil-arrow-down"></i></label>
                        <div class="section-dropdown">
                            <a onclick="formation(5,4,1)" href="#">5-4-1<i class="uil uil-arrow-right"></i></a>
                            <a onclick="formation(4,5,1)" href="#">4-5-1<i class="uil uil-arrow-right"></i></a>
                            <a onclick="formation(3,5,2)" href="#">3-5-2<i class="uil uil-arrow-right"></i></a>
                            <a onclick="formation(3,4,3)" href="#">3-4-3<i class="uil uil-arrow-right"></i></a>
                            <a onclick="formation(3,5,2)" href="#">3-5-2<i class="uil uil-arrow-right"></i></a>
                            <a onclick="formation(5,3,2)" href="#">5-3-2<i class="uil uil-arrow-right"></i></a>
                            <a onclick="formation(4,3,3)" href="#">4-3-3<i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="team">
                <div class="player">
                    <div class="Gole">
                        <div class="card">
                            <div class="imag">

                            </div>
                            <div class="name"></div>
                        </div>
                    </div>
                    <div id="defance" class="defance">
                        <div class="card">
                            <div class="try">
                                <div class="points">
                                    <h1>5</h1>
                                </div>
                            </div>
                            <div class="imag">
                                <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                    alt="">
                            </div>
                            <div class="name"></div>
                        </div>
                        <div class="card">
                            <div class="try">
                                <div class="points">
                                    <h1>5</h1>
                                </div>
                            </div>
                            <div class="imag">
                                <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                    alt="">
                            </div>
                            <div class="name"></div>
                        </div>
                        <div class="card">
                            <div class="try">
                                <div class="points">
                                    <h1>5</h1>
                                </div>
                            </div>
                            <div class="imag">
                                <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                    alt="">
                            </div>
                            <div class="name"></div>
                        </div>
                        <div class="card">
                            <div class="try">
                                <div class="points">
                                    <h1>5</h1>
                                </div>
                            </div>
                            <div class="imag">
                                <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                    alt="">
                            </div>
                            <div class="name"></div>
                        </div>
                    </div>
                    <div id="midfield" class="midfield">
                        <div class="card">
                            <div class="try">
                                <div class="points">
                                    <h1>5</h1>
                                </div>
                            </div>
                            <div class="imag">
                                <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                    alt="">
                            </div>
                            <div class="name"></div>
                        </div>
                        <div class="card">
                            <div class="try">
                                <div class="points">
                                    <h1>5</h1>
                                </div>
                            </div>
                            <div class="imag">
                                <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                    alt="">
                            </div>
                            <div class="name"></div>
                        </div>
                        <div class="card">
                            <div class="try">
                                <div class="points">
                                    <h1>5</h1>
                                </div>
                            </div>
                            <div class="imag">
                                <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                    alt="">
                            </div>
                            <div class="name"></div>
                        </div>
                    </div>
                    <div id="attaque" class="attaque">
                        <div class="card">
                            <div class="try">
                                <div class="points">
                                    <h1>5</h1>
                                </div>
                            </div>
                            <div class="imag">
                                <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                    alt="">
                            </div>
                            <div class="name"></div>
                        </div>
                        <div class="card">
                            <div class="try">
                                <div class="points">
                                    <h1>5</h1>
                                </div>
                            </div>
                            <div class="imag">
                                <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                    alt="">
                            </div>
                            <div class="name"></div>
                        </div>
                        <div class="card">
                            <div class="try">
                                <div class="points">
                                    <h1>5</h1>
                                </div>
                            </div>
                            <div class="imag">
                                <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                    alt="">
                            </div>
                            <div class="name"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="Mylis">
            <div class="serche-pnel">
                <h1>Player Selection</h1>
                <p>View</p>
                <form style="display:flex;   justify-content: space-between;" action="">
                    <label>
                        <input type="radio" id="html" name="radio" checked/>
                        <span>ALL</span>
                    </label>
                    <label>
                        <input type="radio" id="css" name="radio"  />
                        <span>STR</span>
                    </label>
                    <label>
                        <input type="radio" id="javascript" name="radio" />
                        <span>MID</span>
                    </label>
                    <label>
                        <input type="radio" id="javascript" name="radio" />
                        <span>DEF</span>
                    </label>
                    <label>
                        <input type="radio" id="javascript" name="radio" />
                        <span>GOL</span>
                    </label>
                </form>
                <p>sorted by :</p>
                <form style="display:flex;   justify-content: space-between;" action="">
                    <label>
                        <input type="radio" id="html" name="radio" />
                        <span>Name</span>
                    </label>
                    <label>
                        <input type="radio" id="css" name="radio" checked />
                        <span>Price</span>
                    </label>
                    <label>
                        <input type="radio" id="javascript" name="radio" />
                        <span>Point</span>
                    </label>
                </form>
                <input class="max" type="number" placeholder="max cost" id="">
                <input class="max" type="text" name="" placeholder="serch player" id="">
                <button>Serche</button>
            </div>
            <h2>Choose Your Players</h2>
            <div class="player-list">
                <a href="#" class="pl-bay">
                    <div class="bay-situation">
                        <img src="https://www.veryicon.com/download/png/miscellaneous/logo-design-of-lingzhuyun/icon-correct-24-1?s=256"
                            alt="">
                    </div>
                    <div class="bay-team">
                        <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                            alt="">
                    </div>
                    <div class="bay-name">PLAYER </div>
                    <h2>10.2£</h2>
                    <h2>152</h2>
                </a>
            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Football Fantasy League</p>
    </footer>
</body>
<script src="{{ asset('js\Fantasie.js') }}"></script>

</html>