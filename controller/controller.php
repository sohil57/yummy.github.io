<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        // parent:: __construct()
        parent:: __construct();
        // load template
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;
                case '/about-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("about-us.php");
                    require_once("footer.php");
                    break;
                case '/our-menu':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("menu.php");
                    require_once("footer.php");
                    break;
                case '/our-events':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("events.php");
                    require_once("footer.php");
                    break;
                case '/our-chefs':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("chefs.php");
                    require_once("footer.php");
                    break;

                case '/our-menu-gallery':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("gallery.php");
                    require_once("footer.php");
                    break;
                case '/contact-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("contact.php");
                    require_once("footer.php");
                    break;
                case '/book-appointment':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("book-tables.php");
                    require_once("footer.php");
                    break;

            case '/login':
                require_once("index.php");
                require_once("header.php");
                require_once("signin.php");
                require_once("footer.php");
                break;

                default:
                require_once("index.php");
                require_once("header.php");
                require_once("404.php");
                require_once("footer.php");
                break;
            }
        }

       
    }
}
$obj=new controller;
?>