
    //Web Search Input
    $(document).ready(function () {
        $("#search").hover(function () {
            $("#box").animate({ width: "200px" }).css({ "border": "1px solid #dddddd" });

        }, function () {
            $("#box").animate({ width: "0px" });
        });
    });
        //Phone SideNav
        function openNav() {
            var lw = $(window).width();
            $("#Phone_SideNav").css({"width": lw });
        }

        function closeNav() {
        $("#Phone_SideNav").css({ "width": 0 });
    }
 