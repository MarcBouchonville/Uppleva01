    <nav class="blocmenu">
            <div id='cssmenu'>
            <ul>
                <li class='has-sub'><a href='../index.php'><span>home</span></a></li>
                <li class='has-sub'><a href='page02.php'><span>à propos</span></a></li>
               <li class='active'><a href='#'><span>services</span></a>
                  <ul>
                      <li class='last'><a href='#'><span onclick="fenetrePopup()">shopping</span></a></li>
                  </ul>
               </li>
               <li><a href='#'><span>réalisations</span></a></li>
               <li class='has-sub'><a href='#'><span>projets</span></a></li>
               <li class='has-sub'><a href='#'><span>contact</span></a></li>
            </ul>
            </div>
    </nav>

            <script type="text/javascript">
                window.onscroll=function(){menuSticky()};
                var menu = document.getElementById("menu");
                var sticky = menu.offsetTop;
                
                function menuSticky(){
                    if (window.pageYOffset >= sticky) {
                        menu.classList.add("sticky")
                    } else {
                        menu.classList.remove("sticky");
                    }
                }
				
				function fenetrePopup() {
					var myWindow = window.open("", "NomDeFenetre", "width=200,height=100");
					myWindow.document.write("<p>this is the new window " + myWindow.name + "</p>");
				}
            </script>