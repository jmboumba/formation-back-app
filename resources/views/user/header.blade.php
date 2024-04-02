<!-- header section strats -->
<header class="header_section" style="background-color: #f5f8fa ">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a style="margin-left:50px" class="navbar-brand" href="{{url('/')}}"><img width="150" src="images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li style='margin-left:2px' class="nav-item active">
                           <input style="width: 330px; height: 40px; margin-top: 5px;" type="text" placeholder="Rechercher des compétences, sujets ..."/>
                        </li>
                       
                        <form style="width: 200px; margin-right:100px" class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                        @if (Route::has('login'))

                        @auth
                              <li class="nav-item">
                              <x-app-layout>

                              </x-app-layout>
                              </li>

                        @else
                        <li style=" margin-top: 5px;" class="nav-item">
                           <a class="btn btn btn-primary" id='logincss' href="{{ route('login') }}">S'identifier</a>
                        </li>
                        @endauth
                        @endif
                        
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->