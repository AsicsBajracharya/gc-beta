<?php
/**
* Template Name: Radar Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
$user_id = isset($_GET['user_id'])?$_GET['user_id']:0;


$fixed_radar = get_field('fixed_radar', 'option');
$scoreList = array();
$count = 0;
foreach($fixed_radar as $key => $value){
    $radar_content = array(
        'id' => $key+1,
        'title' => $value['member_name'],
        'growthIdxOLDA' => $value['radar_past_growth_index'],
        'innovationIdxOLDA' => $value['radar_past_innovation_index'],
        'growthIdxA' => $value['radar_present_growth_index'],
        'innovationIdxA' => $value['radar_past_innovation_index'],
        'titleXA' => $value['member_title_index_x'],
		'titleYA' => $value['member_title_index_y'],
		'dotColor' => $value['radar_dot_color'],
    );
    array_push($scoreList, $radar_content);
    $count++;
}
if( $user_id ){
    $user_object = get_user_by('ID', $user_id);
    $user_past_radar = get_field('user_past_radar', 'user_'.$user_id);
    $user_present_radar = get_field('user_present_radar', 'user_'.$user_id);
    
    $present_growthIndexScore = $user_present_radar['user_radar_growth_index'];
    $present_innovativeIndexScore = $user_present_radar['user_radar_innovation_index'];
    $present_growthIndexScore = number_format((float)$present_growthIndexScore, 2, '.', '');
    $present_innovativeIndexScore = number_format((float)$present_innovativeIndexScore, 2, '.', '');
    
    $user_radar_content = array(
        'id' => $count+1,
        'title' => $user_object->data->display_name,
        // 'growthIdxOLDA' => $user_past_radar['user_radar_growth_index'],
        // 'innovationIdxOLDA' => $user_past_radar['user_radar_innovation_index'],
        'growthIdxOLDA' => $present_growthIndexScore,
        'innovationIdxOLDA' =>$present_innovativeIndexScore,
        'growthIdxA' => $present_growthIndexScore,
        'innovationIdxA' => $present_innovativeIndexScore,
        'titleXA' => $user_present_radar['user_radar_innovation_index'] + 0.05,
		'titleYA' => $user_present_radar['user_radar_growth_index'] + 0.05,
		'dotColor' => '#000',
		
    );
    if(!empty($user_present_radar['user_radar_innovation_index']) || !empty($user_present_radar['user_radar_growth_index']) ){
         array_push($scoreList, $user_radar_content);
    }
    
}

    for($i = 0; $i < count($scoreList); $i++) {  
        foreach($scoreList[$i] as $key => $value) {
            $scoreList[$i]['growthIdx'] = (600 - ( $scoreList[$i]['growthIdxA'] * 100));
            $scoreList[$i]['innovationIdx'] = $scoreList[$i]['innovationIdxA'] * 100 ;
            $scoreList[$i]['growthIdxOLD'] = (600 - ( $scoreList[$i]['growthIdxOLDA'] * 100));
            $scoreList[$i]['innovationIdxOLD'] = $scoreList[$i]['innovationIdxOLDA'] * 100;
            $scoreList[$i]['growthIdxDF'] = round( $scoreList[$i]['growthIdxA'] - $scoreList[$i]['growthIdxOLDA'],1);
            $scoreList[$i]['innovationIdxDF '] = round( $scoreList[$i]['innovationIdxA'] - $scoreList[$i]['innovationIdxOLDA'],1);
			$scoreList[$i]['titleX'] = $scoreList[$i]['titleXA'] * 100;
			$scoreList[$i]['titleY'] = (600 - ( $scoreList[$i]['titleYA'] * 100));
        }
    }
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9;IE=10;IE=11;IE=Edge,chrome=1"/>
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=0.75 />
    <meta name="description" content="Datetime plugin for wheelnav.js library">
    <link rel="shortcut icon" href="http://wheelnavjs.softwaretailoring.net/wheelnav_favicon.png">
    <title>Frost and sullivan</title>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <style>
        .svg-background {
           background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/rad.png);
           width: 600px;
           height: 600px;
            background-repeat-x: no-repeat;
    background-repeat-y: no-repeat;
        } 

        .vert {
            transform: rotate(200 200, 88deg);
        } 

        .rotate {
            animation: rotation 8s infinite linear;
        }

        @keyframes rotation {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(359deg);
            }
        }

        .setAngle {
            transform: rotate(125deg);
        }

       .world {
            -webkit-animation: spin1 10s infinite linear;
            -moz-animation: spin1 10s infinite linear;
            -o-animation: spin1 10s infinite linear;
            -ms-animation: spin1 10s infinite linear;
            animation: spin1 10s infinite linear;
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%;f
        }

        @-webkit-keyframes spin1 {
            0% {
                -webkit-transform: rotate(0deg);
            }

           100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @-moz-keyframes spin1 {
            0% {
                -moz-transform: rotate(0deg);
            }

            100% {
                -moz-transform: rotate(360deg);
            }
        }

        @-o-keyframes spin1 {
            0% {
               -o-transform: rotate(0deg);
            }

            100% {
                -o-transform: rotate(360deg);
            }
        }

        @-ms-keyframes spin1 {
            0% {
                -ms-transform: rotate(0deg);
            }
            100% {

                -ms-transform: rotate(360deg);
            }
        } 

        @keyframes spin1 {
            0% {
               transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

    </style>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="./js/bootstrap.min.js"></script>

    <link href="css/index.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

</head>

<body>

    <!-- Page Content -->

    <div class="container-fluid style="width:auto;height:auto;max-height:100%;max-width:100%;max-device-width:100%;max-device-height:100%"">
        <div class="row" style="transform:scale(0.8,0.8) translate(-10%, 0%)">
            <div class="col-md-10">
                <table ><tr><td valign="top">     
                <svg  class="svg-background"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">             
                <style>
                    path, polyline {
                        fill: none;
                        stroke: rgb(200,200,100);
                        vector-effect: non-scaling-stroke;
                        stroke-width: 1;
                   }

                    path {
                        stroke-dasharray: 11, 5;
                    }

                </style>  

    <marker id="triangle" viewBox="0 0 10 10" refX="1" refY="5" markerUnits="strokeWidth" markerWidth="10" markerHeight="10"  orient="auto">
      <path d="M 0 0 L 10 5 L 0 10 z" fill="#f00"/>
    </marker>

    <marker id="endarrow" markerWidth="10" markerHeight="7" refX="12.5" refY="3.5" orient="auto" markerUnits="strokeWidth">
        <polygon points="0 0, 10 3.5, 0 7" fill="gray" />
    </marker>
 
    <marker id="pointer" markerWidth="10" markerHeight="7"
                refX="12.5" refY="4.9" markerUnits="userSpaceOnUse" orient="auto" fill="orange">
        <polyline points="1 1, 9 5, 1 7" />
    </marker>
   <image href="<?php echo get_stylesheet_directory_uri(); ?>/images/line.png" x="300" y="300" width="220px" height="220px"  class="world" />                           

<?php
 for($i = 0; $i < count($scoreList); $i++) {
    // output data of each row
//     foreach($scoreList[$i] as $key => $value) { 
   
     if( $scoreList[$i]["growthIdxA"] +   $scoreList[$i]["innovationIdxA"]  ==   $scoreList[$i]["growthIdxOLDA"] +   $scoreList[$i]["innovationIdxOLDA"]){
               echo "<circle cx='" .  $scoreList[$i]["innovationIdx"] . "' cy='" .  $scoreList[$i]["growthIdx"] . "' r='3' stroke='light green' stroke-width='3' fill='".$scoreList[$i]['dotColor']."' />";
         }
   if( $scoreList[$i]["growthIdxA"] +   $scoreList[$i]["innovationIdxA"]  >   $scoreList[$i]["growthIdxOLDA"] +   $scoreList[$i]["innovationIdxOLDA"]){
               echo "<circle cx='" .  $scoreList[$i]["innovationIdx"] . "' cy='" .  $scoreList[$i]["growthIdx"] . "' r='3' stroke='light green' stroke-width='3' fill='".$scoreList[$i]['dotColor']."' />";
                        echo "<circle cx='" .  $scoreList[$i]["innovationIdxOLD"] . "' cy='" .  $scoreList[$i]["growthIdxOLD"] . "' r='2' stroke='light white' stroke-width='3' fill='".$scoreList[$i]['dotColor']."' />";
            echo "<line x1='" .  $scoreList[$i]["innovationIdxOLD"] . "' y1='" .  $scoreList[$i]["growthIdxOLD"] . "' x2='" .  $scoreList[$i]["innovationIdx"] . "' y2='" .  $scoreList[$i]["growthIdx"] . "' style='stroke:rgb(200,200,200);stroke-width:1;' stroke-dasharray='5,5'  marker-end='url(#endarrow)'   />";
       }

    if( $scoreList[$i]["growthIdxA"] +   $scoreList[$i]["innovationIdxA"]  <   $scoreList[$i]["growthIdxOLDA"] +   $scoreList[$i]["innovationIdxOLDA"]){ 
               echo "<circle cx='" .  $scoreList[$i]["innovationIdx"] . "' cy='" .  $scoreList[$i]["growthIdx"] . "' r='3' stroke='light green' stroke-width='3' fill='".$scoreList[$i]['dotColor']."' />";
                echo "<circle cx='" .  $scoreList[$i]["innovationIdxOLD"] . "' cy='" .  $scoreList[$i]["growthIdxOLD"] . "' r='2' stroke='light white' stroke-width='3' fill='".$scoreList[$i]['dotColor']."' />";
       echo "<line x1='" .  $scoreList[$i]["innovationIdxOLD"] . "' y1='" .  $scoreList[$i]["growthIdxOLD"] . "' x2='" .  $scoreList[$i]["innovationIdx"] . "' y2='" .  $scoreList[$i]["growthIdx"] . "' style='stroke:rgb(200,200,200);stroke-width:1;' stroke-dasharray='5,5'  marker-end='url(#endarrow)'   />";
    }
   
//            echo "<circle cx='" .  $scoreList[$i]["innovationIdx"] . "' cy='" .  $scoreList[$i]["growthIdx"] . "' r='3' stroke='light green' stroke-width='3' fill='green' />";

//            echo "<circle cx='" .  $scoreList[$i]["innovationIdxOLD"] . "' cy='" .  $scoreList[$i]["growthIdxOLD"] . "' r='3' stroke='light white' stroke-width='3' fill='white' />";

  //     echo "<line x1='" .  $scoreList[$i]["innovationIdx"] . "' y1='" .  $scoreList[$i]["growthIdx"] . "' x2='" .  $scoreList[$i]["innovationIdxOLD"] . "' y2='" .  $scoreList[$i]["growthIdxOLD"] . "' style='stroke:rgb(200,200,200);stroke-width:1;' stroke-dasharray='5,5'  marker-end='url(#pointer)'   />"


//calculate the difference

     if ( $scoreList[$i]["growthIdxDF"]<>-111111)
        {$dfGrowth=  $scoreList[$i]["growthIdxDF"]; }
        else
        {$dfGrowth ="";}
     if ( $scoreList[$i]["innovationIdxDF"]<>-111111)
        {$dfInnovation=  $scoreList[$i]["innovationIdxDF"]; }
       else
        {$dfInnovation ="";} 

    $dispname =   $scoreList[$i]["title"];
//     if (strlen($dispname) > 7) {
//         $dispname= substr($dispname, 0, 6) . "..";
//     }
                echo "<text x='" . ( $scoreList[$i]["titleX"]) . "'  y='" . ( $scoreList[$i]["titleY"])  . "' fill='".($scoreList[$i]["dotColor"])."' font-family='Arial' font-size='12'>" .$dispname . "</text>";
   /*

                echo "<text x='" . ( $scoreList[$i]["innovationIdx"]+10) . "'  y='" . ( $scoreList[$i]["growthIdx"] +10)  . "' fill='black' font-family='Arial' font-size='10'>" . $dfGrowth."," .  $dfInnovation .  "</text>";
*/
if ( $scoreList[$i]["growthIdxDF"]<>0)
    {
        if( $scoreList[$i]["growthIdxDF"]>0) {
            $imgname="inc";
        }else{$imgname="dec";
        }

    //        echo "<text x='" . ( $scoreList[$i]["innovationIdx"]+42) . "'  y='" . ( $scoreList[$i]["growthIdx"] +3)  . "' fill='black' font-family='Arial' font-size='10'>G" . $dfGrowth. "</text>";

    //        echo "<image x='" . ( $scoreList[$i]["innovationIdx"]+68 ) . "'  y='" . ( $scoreList[$i]["growthIdx"] -2 )  . "' fill='black' href='" .$imgname. ".gif' width='8px' />";

    if ( $scoreList[$i]["innovationIdxDF"]<>0)
        {
          if( $scoreList[$i]["innovationIdxDF"]>0) {
                $imgname="inc";
            }else{$imgname="dec";
        }     

        //   echo "<text x='" . ( $scoreList[$i]["innovationIdx"]+92) . "'  y='" . ( $scoreList[$i]["growthIdx"] +3)  . "' fill='black' font-family='Arial' font-size='10'>I" . $dfInnovation. "</text>";
        //   echo "<image x='" . ( $scoreList[$i]["innovationIdx"]+118 ) . "'  y='" . ( $scoreList[$i]["growthIdx"] -2 )  . "' fill='black' href='" .$imgname. ".gif' width='8px' />";
        }
    }
    else {
     if ( $scoreList[$i]["innovationIdxDF"]<>0)
        {
            if( $scoreList[$i]["innovationIdxDF"]>0) {
                $imgname="inc";
            }else{$imgname="dec";
          }

       //    echo "<text x='" . ( $scoreList[$i]["innovationIdx"]+42) . "'  y='" . ( $scoreList[$i]["growthIdx"] +3)  . "' fill='black' font-family='Arial' font-size='10'>I" . $dfInnovation. "</text>";

        //   echo "<image x='" . ( $scoreList[$i]["innovationIdx"]+68 ) . "'  y='" . ( $scoreList[$i]["growthIdx"] -2 )  . "' fill='black' href='" .$imgname. ".gif' width='8px' />";
        }
        }      
//     }

} 

//$conn->close();
?>
                </svg>                                          </td>
                                                                </tr>
                                                                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- /.container -->
    
    <div>
        
    </div>
</body>
</html>