@extends('Main.MainFantasie')
@section('Main')
<form action="{{route('Fantasie.XI', [$User, $Fixur])}}" class="team-list" method="POST">
            @csrf
            <div class="butns">
                    <a class="bactiv">Line-Up</a>
                    <a href="{{route('Fantasie.Club.Points',[1,1])}}">Points</a>
            </div>
            <nav class="team-nave">
                
                

                <div class="dedline">
                    <h3>Deadline - {{ \Carbon\Carbon::parse($Fixur->datendtime)->format('d M H:i') }}
                    </h3>

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


                <input type="hidden" id="vf" name="Formation" value="4-3-3">
                    <button type="submit">save</button>
                
            </nav>
            
            <div class="team">
                <div class="player">
                    <div class="Gole">
                        <div id="Player1" class="card">
                            <div  onclick="carde(this,'GOL')" class="Void">
                                +
                            </div>
                        </div>
                    </div>
                    <div id="defance" class="defance">
                        <div id="Player2"  onclick="carde(this,'DEF')" 
                            class="card">
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
                        <div id="Player3"  onclick="carde(this,'DEF')" 
                            class="card">
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
                        <div id="Player4"  onclick="carde(this,'DEF')" 
                            class="card">
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
                        <div id="Player5"  onclick="carde(this,'DEF')" 
                            class="card">
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
                        <div id="Player6"  onclick="carde(this,'MID')" 
                            class="card">
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
                        <div id="Player7"  onclick="carde(this,'MID')" 
                            class="card">
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
                        <div id="Player8"  onclick="carde(this,'MID')" 
                            class="card">
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
                        <div id="Player9"  onclick="carde(this,'STR')" 
                            class="card">
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
                        <div id="Player10"  onclick="carde(this,'STR')" 
                            class="card">
                            <div class="try">
                                <div class="points">
                                    <h1>5</h1>
                                </div>
                            </div>
                            <div class="imag">
                                <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                    alt="">
                            </div>
                            <div class="name">name2</div>
                        </div>
                        <div id="Player11"  onclick="carde(this,'STR')" 
                            class="card">
                            <div class="try">
                                <div class="points">
                                    <h1>5</h1>
                                </div>
                            </div>
                            <div class="imag">
                                <img src="https://img.chelseafc.com/image/upload/f_auto,w_400,q_90/editorial/people/first-team/2023-24/Romeo_Lavia_profile_23-24_avatar-removebg.png"
                                    alt="">
                            </div>
                            <div class="name">name</div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
@endsection('Main')
<script>
    function carde(element, Position) {
        if (document.getElementById('change1') == null) {

            document.getElementById('players').innerHTML += `<div  class="change">
                <div class="titel">
                    <button onclick="remove()">X</button>
                    <h3>Change player</h3>
                    <button onclick="empty(${element.id})">embty</button>
                </div>
                <div id="change1" class="first"></div>
                <div class="sperator">
                    <img src="https://icons.veryicon.com/png/o/miscellaneous/itsm-management/change-2.png" alt="">
                </div>
                <div id="change2" class="secend"></div>
            </div>`
            avaliubel = document.getElementById('MyPlayers').querySelectorAll(`[id=${Position}]`)
            for (let i = 0; i < avaliubel.length; i++) {
                if (document.getElementsByClassName('player')[0].querySelectorAll(`[id='${avaliubel[i].querySelectorAll('[class="bay-name"]')[0].id}']`).length == 0) {
                    document.getElementById('change2').innerHTML += `<div class="cp"><a onclick="add(${element.id},'${avaliubel[i].querySelectorAll('img')[1].src}',${avaliubel[i].querySelectorAll('[class="bay-name"]')[0].id})" id="${Position}" class="pl-bay">${avaliubel[i].innerHTML}</a></div>`
                }
            }
            if (element.className == "card") {
            player = `<a id="${Position}" class="pl-bay">
            <div class="bay-situation">
                <img src="https://www.veryicon.com/download/png/miscellaneous/logo-design-of-lingzhuyun/icon-correct-24-1?s=256"
                    alt="">
            </div>
            <div class="bay-team">
                <img src="${element.querySelectorAll('img')[0].src}"
                    alt="">
            </div>
            <div class="bay-name">${element.querySelectorAll('[class=name]')[0].innerHTML}</div>
            <h2>40£</h2>
            <h2>152</h2>
            </a>`
            
                document.getElementById('change1').innerHTML += `<div class="cp">${player}</div>`
            }
        }

    }
    function add( element2, src, id) {
        element2.className = 'card'
        element2.innerHTML = `
                            <div id="${id}" class="imag">
                                <img id="img" src=${src}
                                    alt="">
                            </div>
                            <input type="hidden" name="${element2.id}"  value="${id}">
                            <div  class="name">name</div>`

        if (document.getElementById('change1') != null) {
            remove()
        }
    }

    function Macke() {
        @if ($Team->Player1 != null)
            add( document.getElementById('Player1'), @json($Team->getPlayer($Team->Player1)->Pictur),{{$Team->getPlayer($Team->Player1)->id}})
        @else
            empty(document.getElementById('Player1'))
        @endif
        @if ($Team->Player2 != null)
            add( document.getElementById('Player2'), @json($Team->getPlayer($Team->Player2)->Pictur),{{$Team->getPlayer($Team->Player2)->id}})
        @else
            empty(document.getElementById('Player2'))
        @endif
        @if ($Team->Player3 != null)
            add( document.getElementById('Player3'), @json($Team->getPlayer($Team->Player3)->Pictur),{{$Team->getPlayer($Team->Player3)->id}})
        @else
            empty(document.getElementById('Player3'))
        @endif
        @if ($Team->Player4 != null)
            add( document.getElementById('Player4'), @json($Team->getPlayer($Team->Player4)->Pictur),{{$Team->getPlayer($Team->Player4)->id}})
        @else
            empty(document.getElementById('Player4'))
        @endif
        @if ($Team->Player5 != null)
            add( document.getElementById('Player5'), @json($Team->getPlayer($Team->Player5)->Pictur),{{$Team->getPlayer($Team->Player5)->id}})
        @else
            empty(document.getElementById('Player5'))
        @endif
        @if ($Team->Player6 != null)
            add( document.getElementById('Player6'), @json($Team->getPlayer($Team->Player6)->Pictur),{{$Team->getPlayer($Team->Player6)->id}})
        @else
            empty(document.getElementById('Player6'))
        @endif
        @if ($Team->Player7 != null)
            add( document.getElementById('Player7'), @json($Team->getPlayer($Team->Player7)->Pictur),{{$Team->getPlayer($Team->Player7)->id}})
        @else
            empty(document.getElementById('Player7'))
        @endif
        @if ($Team->Player8 != null)
            add( document.getElementById('Player8'), @json($Team->getPlayer($Team->Player8)->Pictur),{{$Team->getPlayer($Team->Player8)->id}})
        @else
            empty(document.getElementById('Player8'))
        @endif
        @if ($Team->Player9 != null)
            add( document.getElementById('Player9'), @json($Team->getPlayer($Team->Player9)->Pictur),{{$Team->getPlayer($Team->Player9)->id}})
        @else
            empty(document.getElementById('Player9'))
        @endif
        @if ($Team->Player10 != null)
            add( document.getElementById('Player10'), @json($Team->getPlayer($Team->Player10)->Pictur),{{$Team->getPlayer($Team->Player10)->id}})
        @else
            empty(document.getElementById('Player10'))
        @endif
        @if ($Team->Player11 != null)
            add( document.getElementById('Player11'), @json($Team->getPlayer($Team->Player11)->Pictur),{{$Team->getPlayer($Team->Player11)->id}})
        @else
            empty(document.getElementById('Player11'))
        @endif
    }
    function formation(defance, midfiled, attac) {
        document.getElementById('vu').innerHTML = `${defance}-${midfiled}-${attac}`
        document.getElementById('defance').innerHTML = ''
        document.getElementById('midfield').innerHTML = ''
        document.getElementById('attaque').innerHTML = ''
        for (let i = 2; i <= defance + 1; i++) {
            document.getElementById('defance').innerHTML += `
        <div id="Player${i}" 
        
             onclick="carde(this,'DEF')"
         class="card">
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
    </div>`
        }
        for (let i = defance + 2; i <= midfiled + defance + 1; i++) {
            document.getElementById('midfield').innerHTML += `<div id="Player${i}"
         
             onclick="carde(this,'MID')"
                             class="card">
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
    </div>`
        }
        for (let i = midfiled + defance + 2; i <= attac + midfiled + defance + 1; i++) {
            document.getElementById('attaque').innerHTML += `<div id="Player${i}" 
       
         onclick="carde(this,'STR')"
         class="card">
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
    </div>`
        }
        document.getElementById('vf').value = `${defance}-${midfiled}-${attac}`
        Macke()
    }
    
</script>