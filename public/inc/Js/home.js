(function(){

    $(document).ready(function () {

        // Sticky Navbar....
        var navbar = document.getElementById("navbar");
        var stickynavbar = navbar.offsetTop;        

        $(document).scroll(function () { 

            var WidthForSidebar=$(document).width();
                                           
            if (window.pageYOffset >= stickynavbar) {

                navbar.classList.add("sticky-navbar")
                
            }

            else {

                navbar.classList.remove("sticky-navbar")

            }

            if(WidthForSidebar<=575){
                    
                $(".sidebar-menu").css({"top":"0px"});
            }
            else if(WidthForSidebar > 575 && WidthForSidebar <= 768){
                if(window.pageYOffset===0)
                {
                    $(".sidebar-menu").css({"top":"72px"});
                }
                else {
                    $(".sidebar-menu").css({"top":"58px"});
                }
            }
            else{
                if(window.pageYOffset===0)
                {
                    $(".sidebar-menu").css({"top":"100px"});
                }
                else {
                    $(".sidebar-menu").css({"top":"60px"});
                }
                }
           
        });

        // Sticky Navbar End...
       
        // Scroll Search Button..

        $("#searchbutton").click(function (e) { 
           
            document.documentElement.scrollTop=65;
           
        });
        
        // End Scroll Search Button....

        //Start SidebarMenu..

         $("#iconsdesignmenu").on("click", function () {
            
            var WidthSidebarMenu = $(".sidebar-menu").css("width");
            var WidthForSidebar=$(document).width();
            console.log(WidthForSidebar);
            
            if(WidthSidebarMenu==="0px")
            {
                              
                if(WidthForSidebar<=575){
                    
                    $(".sidebar-menu").css({"display":"block","width":"250px"});
                }
                else if(WidthForSidebar > 575 && WidthForSidebar <= 768){
                    $(".sidebar-menu").css({"display":"block","width":"250px","top":"70px"});
                }
                else{
                $(".sidebar-menu").css({"display":"block","width":"250px","top":"100px"});
            }
        }
            else
            {
                 $(".sidebar-menu").css({"width":"0px","top":"0px" });
                 setTimeout(()=>{
                    $(".sidebar-menu").css({"display":"none"});
                },500)
                
            }
              
         });

         $("#sidebar-linklistbtn").on("click", function () {
            $(".sidebar-menu").css({"width":"0px" , "display":"none"});
         });

         //End Sidebar Menu
         

    });
    })();