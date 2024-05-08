<?php 
    class Opjects{
        public function title($role){
            switch ($role){
                case 1 :
                    return "It Manager";
                    break;
                case 2 :
                    return "Hr Manager";
                    break;
                case 3 :
                    return "Gd Manager";
                    break;
                case 4 :
                    return "Fi Manager";
                    break;
                case 5 :
                    return "Pm Manager";
                    break;
                case 6 :
                    return "Fm Manager";
                    break;
                case 7 :
                    return "Ia Manager";
                    break;
                case 8 :
                    return "Ft Manager";
                    break;
                case 9 :
                    return "Ms Manager";
                    break;
                case 10 :
                    return "CEO";
                    break;
                default:
                    return "Employee";
            }
        }

        
    }
?>