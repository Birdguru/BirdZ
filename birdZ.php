<?php
error_reporting(0);
$secret = "43726974746572526162626974";
$action = strtolower($_REQUEST['action']);
$password = $_REQUEST['secret'];
if($password != $secret) 
{
    die("ERROR: NOT AUTHENTICATED");
}
class probabilityRandom {
    #private vars
    var
        $data = array(),
        $universe = 0;

    #add an item to the list and defines its probability of beeing chosen
    function add( $data, $probability ){
        $this->data[ $x = sizeof( $this->data ) ] = new stdClass;
        $this->data[ $x ]->value = $data;
        $this->universe += $this->data[ $x ]->probability = abs( $probability );
    }

    #remove an item from the list
   function remove( $index ){
        if( $index > -1 && $index < sizeof( $this->data ) ) {
            $item = array_splice( $this->data, $index, 1 );
            $this->universe -= $item->probability;
        }
    }

    #clears the class
    function clear(){
        $this->universe = sizeof( $this->data = array() );
    }

    #return a randomized item from the list
    function get(){
        if( !$this->universe )
            return null;
        $x = round( mt_rand( 0, $this->universe ) );
        $max = $i = 0;
        do
            $max += $this->data[ $i++ ]->probability;
        while( $x > $max );
        return $this->data[ $i-1 ]->value;
    }
}
switch($action) 
{
    case 'baby':
        $motherfur = $_REQUEST["motherfur"];
        $motherear = $_REQUEST["motherear"];
        $mothereye = $_REQUEST["mothereye"];
        $mothertail = $_REQUEST["mothertail"];
        $mothershade = $_REQUEST["mothershade"];
        $motherluster = $_REQUEST["motherluster"];
        $mothergleam = $_REQUEST["mothergleam"];
        
        $fatherfur = $_REQUEST["fatherfur"];
        $fatherear = $_REQUEST["fatherear"];
        $fathereye = $_REQUEST["fathereye"];
        $fathertail = $_REQUEST["fathertail"];
        $fathershade = $_REQUEST["fathershade"];
        $fatherluster = $_REQUEST["fatherluster"];
        $fathergleam = $_REQUEST["fathergleam"];
                
        $furprobability = new ProbabilityRandom;
        $furprobability->add($motherfur,10);
        $furprobability->add($fatherfur,10);
        $furprobability->add("1000",100);
        $furprobability->add("1001",50);
        $furprobability->add("1002",50);
        $fur = $furprobability->get();
        
        
        $eyeprobability = new ProbabilityRandom;
        $eyeprobability->add($mothereye,10);
        $eyeprobability->add($fathereye,10);
        $eyeprobability->add("1000",100);
        $eyeprobability->add("1001",25);
        $eyeprobability->add("1002",25);
        $eyeprobability->add("1003",25);
        $eyeprobability->add("1004",25);
        $eyeprobability->add("1005",25);
        $eyeprobability->add("1006",25);
        $eyeprobability->add("1007",25);
        $eyeprobability->add("1008",25);
        $eye = $eyeprobability->get();
        
        $earprobability = new ProbabilityRandom;
        $earprobability->add($motherear,10);
        $earprobability->add($fatherear,10);
        $earprobability->add("1000",100);
        $earprobability->add("1001",25);
        $earprobability->add("1002",25);
        $earprobability->add("1003",25);
        $earprobability->add("1004",25);
        $ear = $earprobability->get();
        
        $tailprobability = new ProbabilityRandom;
        $tailprobability->add($mothertail,10);
        $tailprobability->add($fathertail,10);
        $tailprobability->add("1000",100);
        $tailprobability->add("1001",25);
        $tailprobability->add("1002",25);
        $tailprobability->add("1003",25);
        $tailprobability->add("1004",25);
        $tail = $tailprobability->get();
        
        $shadeprobability = new ProbabilityRandom;
        $shadeprobability->add($mothershade,10);
        $shadeprobability->add($fathershade,10);
        $shadeprobability->add("1000",100);
        $shadeprobability->add("1001",25);
        $shadeprobability->add("1002",15);
        $shadeprobability->add("1003",25);
        $shadeprobability->add("1004",15);
        $shadeprobability->add("1005",15);
        $shadeprobability->add("1006",25);
        $shadeprobability->add("1007",15);
        $shade = $shadeprobability->get();
        
        $lusterprobability = new ProbabilityRandom;
        $lusterprobability->add($motherluster,10);
        $lusterprobability->add($fatherluster,10);
        $lusterprobability->add("1000",100);
        $lusterprobability->add("1001",25);
        $luster = $lusterprobability->get();
        
        $gleamprobability = new ProbabilityRandom;
        $gleamprobability->add($mothergleam,10);
        $gleamprobability->add($fathergleam,10);
        $gleamprobability->add("1000",100);
        $gleamprobability->add("1001",35);
        $gleamprobability->add("1002",15);
        $gleam = $gleamprobability->get();
        
        $sexprobability = new ProbabilityRandom;
        $sexprobability->add("1001",10);
        $sexprobability->add("1000",100);
        $sex = $sexprobability->get();
        
        echo 'BABY^'.$fur.'^'.$ear.'^'.$eye.'^'.$tail.'^'.$shade.'^'.$luster.'^'.$gleam.'^'.$sex;
        break;
    case 'max':
        $fur = '1002';//fur
        $ear = '1004';//ear
        $eye = '1008';//eye
        $tail = '1004';//tail
        $shade = '1007';//shade
        $luster = '1001';//luster
        $gleam = '1002';//gleam
        echo "MAX^".$fur."^".$eye."^".$ear."^".$tail."^".$shade."^".$luster."^".$gleam;
        break;
    case 'fetch':
        $earid = $_REQUEST['ear'];
        $eyeid = $_REQUEST['eye'];
        $tailid = $_REQUEST['tail'];
        $lusterid = $_REQUEST['luster'];
        $gleamid = $_REQUEST['gleam'];
        $furid = $_REQUEST['fur'];
        $shadeid = $_REQUEST['shade'];
        
        $arrayear = array(1000=>"Normal|b9daa065-ed22-d4e6-54a2-f6baf4ae7c7d|<0.101200, -0.043700, 0.084700>|<0.158397, -0.098688, -0.092663, 0.978051>|<0.180430, 0.157876, 0.180430>|<0.082200, 0.059300, 0.080700>|<0.075922, -0.206387, -0.974967, 0.032851>|<0.180430, 0.157876, 0.180430>",
                        1001=>"Flop|740b08ae-a871-cfea-5348-2877517193a5|<0.171494, -0.079483, 0.033264>|<0.679819, -0.290646, -0.264695, 0.619119>|<0.088105, 0.077092, 0.088105>|<0.171494, 0.068344, 0.039978>|<0.332849, -0.623869, -0.690673, 0.151560>|<0.088105, 0.077092, 0.088105>",
                        1002=>"Bunneh|92dc864e-faed-f81f-e015-e09e00469d26|<0.166565, -0.048294, 0.070801>|<0.186592, 0.003502, 0.454971, 0.870731>|<0.067371, 0.080259, 0.143298>|<0.166527, 0.050064, 0.080688>|<0.067213, 0.209353, 0.788519, 0.574362>|<0.067370, 0.080260, 0.143300>",
                        1003=>"Bunneh2|6cc6a0c9-999c-9fb9-99f4-b00ab6d846c8|<0.156300, -0.062200, 0.067900>|<0.186592, 0.003502, 0.454971, 0.870731>|<0.102476, 0.080259, 0.143298>|<0.155800, 0.080400, 0.076300>|<0.067213, 0.209353, 0.788519, 0.574362>|<0.132290, 0.080260, 0.143300>",
                        1004=>"Elephant|5c5d9ce6-40a6-017b-2e75-0dd9c993b530|<0.174965, -0.048248, 0.036133>|<0.127460, -0.927525, -0.350464, 0.025040>|<0.102476, 0.080259, 0.143298>|<0.155800, 0.047791, 0.028442>|<0.825993, 0.127625, -0.078847, 0.543352>|<0.132290, 0.080260, 0.143300>");
        
        $arrayeye = array(1000=>"Normal|e0ca7d87-69a1-8b7f-0225-b0c241d0e7fa",
                    1001=>"Blue|2a25d691-b04a-fbca-d0b3-d1a8dc720dae",
                    1002=>"Brown|834a5149-7111-87ab-4c74-c10cd4b4eba2",
                    1003=>"Green|c6e0bfa9-ef45-72b2-6df4-67e41afc27a5",
                    1004=>"Red|5d7bcd50-a2cf-3bfd-a092-564093a59f56",
                    1005=>"Orange|8066f00a-d49c-27c9-8a5f-8b97a4786cfb",
                    1006=>"Purple|b0230bc2-dd43-ddfc-ba60-8349c3a96a55",
                    1007=>"Pink|79c6c693-5962-297c-41a5-31292489d607",
                    1008=>"Yellow|c1bfaac1-dd0b-ced7-b970-bcf13e26ef79");
        
        //                        name|         sculpt|                           position|                        rotation|                              size
        $arraytail = array(1000=>"Normal|be293869-d0d9-0a69-5989-ad27f1946fd4|<-0.001175, 0.002365, -0.001221>|<0.000000, 0.000000, 0.000000, 1.000000>|<0.0, 0.0, 0.0>",
                    1001=>"Squirrel|0b1884bb-0c90-0f47-9988-f12f3f3fcdbb|<-0.242859, 0.006348, -0.034241>|<0.000013, 0.382663, 0.000031, 0.923888>|<0.313304, 0.131845, 0.236230>",
                    1002=>"Cheshire|c8ad116a-77bf-6ed9-24bd-f1b54a3692c8|<-0.281693, 0.013672, -0.016846>|<0.000000, 0.993518, 0.000000, 0.113673>|<0.209050, 0.174653, 0.362386>",
                    1003=>"Cat|8ac1a836-ece2-f6b5-2786-0df8c5bd8f1f|<-0.233803, -0.015594, -0.106812>|<-0.470709, 0.552383, -0.276876, 0.629798>|<0.185030, 0.175821, 0.275097>",
                    1004=>"Raccoon|6bc48929-cb97-9786-eee0-df3648b1249f|<-0.285800, 0.018300, -0.101300>|<-0.785661, 0.132461, -0.603538, 0.030538>|<0.185030, 0.175821, 0.315783>");
        
        $arrayluster = array(1000=>"No|0",
                    1001=>"Yes|1");
        
        $arraygleam = array(1000=>"None|0.00",
                    1001=>"Low|0.05",
                    1002=>"High|0.10");
        
        $arrayshade = array(1000=>"White|<1.000000,1.000000,1.000000>",
                    1001=>"Warmth|<1.000000, 0.274510, 0.274510>",
                    1002=>"Haze|<0.501960, 0.501960, 1.000000>",
                    1003=>"Orange|<1.000000, 0.662750, 0.321570>",
                    1004=>"Blush|<0.756860, 0.470590, 0.619610>",
                    1005=>"Chill|<0.501960, 1.000000, 1.000000>",
                    1006=>"Teal|<0.000000, 1.000000, 0.501960>",
                    1007=>"Yellow|<1.000000, 1.000000, 0.501960>");
        
        $arrayfur = array(1000=>"Normal|6:1abb34a2-b69a-d0eb-81d0-f0662657d13b|10:1abb34a2-b69a-d0eb-81d0-f0662657d13b|8:1abb34a2-b69a-d0eb-81d0-f0662657d13b|11:1abb34a2-b69a-d0eb-81d0-f0662657d13b|9:1abb34a2-b69a-d0eb-81d0-f0662657d13b|4:09cea02c-d200-1710-91c2-e480b5201c27|5:09cea02c-d200-1710-91c2-e480b5201c27|7:b7c7ea4c-d95b-b144-cd39-1c63c723cfe5|3:1abb34a2-b69a-d0eb-81d0-f0662657d13b",
                    1001=>"Gray|6:1028e1d8-2fbb-4857-d5b7-45fcad5110f3|10:be0b1233-3390-17c2-3418-5d0e660ba67f|8:be0b1233-3390-17c2-3418-5d0e660ba67f|11:be0b1233-3390-17c2-3418-5d0e660ba67f|9:be0b1233-3390-17c2-3418-5d0e660ba67f|4:d4b9be9a-f06f-cf5c-b7de-7bcd0b4e90e8|5:d4b9be9a-f06f-cf5c-b7de-7bcd0b4e90e8|7:5a41d0b8-aab7-cccf-0d9b-72bb040ca271|3:1028e1d8-2fbb-4857-d5b7-45fcad5110f3",
                    1002=>"Brown|6:ad5885c1-55ef-8bcf-4133-69a6d9d19068|10:07c53927-5878-7314-953e-08bd276f794c|8:07c53927-5878-7314-953e-08bd276f794c|11:07c53927-5878-7314-953e-08bd276f794c|9:07c53927-5878-7314-953e-08bd276f794c|4:acf1b469-c582-c499-6af4-e994a989d5bb|5:acf1b469-c582-c499-6af4-e994a989d5bb|7:e41a62fc-3297-1052-f081-e5715d1e69a8|3:ad5885c1-55ef-8bcf-4133-69a6d9d19068",
                    6003=>"Valentine|6:10ad0862-2c11-0ffe-0e06-e96237e6ad58|10:10ad0862-2c11-0ffe-0e06-e96237e6ad58|8:10ad0862-2c11-0ffe-0e06-e96237e6ad58|11:10ad0862-2c11-0ffe-0e06-e96237e6ad58|9:10ad0862-2c11-0ffe-0e06-e96237e6ad58|4:02765a40-eff7-f911-f905-b2f1a2e6fb72|5:02765a40-eff7-f911-f905-b2f1a2e6fb72|7:1ac318e3-de03-370d-fc23-747d72383381|3:10ad0862-2c11-0ffe-0e06-e96237e6ad58",
                    6004=>"Broke Heart|6:73829929-d2fe-f8ac-213e-8b688ed34d6c|10:4cec99bd-854e-da79-6ab8-31dc02b2d319|8:4cec99bd-854e-da79-6ab8-31dc02b2d319|11:4cec99bd-854e-da79-6ab8-31dc02b2d319|9:4cec99bd-854e-da79-6ab8-31dc02b2d319|4:1bca7587-2f2e-2fc0-36c7-1d696ca67fd2|5:1bca7587-2f2e-2fc0-36c7-1d696ca67fd2|7:7a1f52f7-a043-d304-4aa2-7977d0e6fbd5|3:4cec99bd-854e-da79-6ab8-31dc02b2d319");
        
        $output = "";
        $output.= $arrayfur[$furid]."^";
        $output.= $arrayeye[$eyeid]."^";
        $output.= $arrayear[$earid]."^";
        $output.= $arraytail[$tailid]."^";
        $output.= $arrayshade[$shadeid]."^";
        $output.= $arrayluster[$lusterid]."^";
        $output.= $arraygleam[$gleamid]."^";
        
        echo $output;
}
?>




max.php code below


<?php
$id = $_GET['t'];
switch($id)
{
    case 0:
        echo '1002';//fur
        break;
    case 1:
        echo '1004';//ear
        break;
    case 2:
        echo '1008';//eye
        break;
    case 3:
        echo '1004';//tail
        break;
    case 4:
        echo '1007';//shade
        break;
    case 5:
        echo '1001';//luster
        break;
    case 6:
        echo '1002';//gleam
        break;
}
?>
