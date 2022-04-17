<?php
class Logo extends User
{

    public function LogoProcess($file)
    {
        $con = $this->GetConnection();

        [$fileName, $filetmp, $fileExt, $filedesti, $finlenamenew] = $this->ExtractFileData($file, 'logo');

        $stmt = $con->prepare("SELECT * FROM logo");

        $executeResult = $stmt->execute();

        $numwors = $stmt->rowCount();

        if ($numwors>0) {

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $img =  $result['image'];

            $olddist = "../../user/assets/logo/$img"; //old logo

            unlink($olddist);

            $prepareStatement  = "UPDATE `logo` SET `image`=?";

            $stmt = $con->prepare($prepareStatement);

            $executeResult = $stmt->execute([$finlenamenew]);

            if ($executeResult) {

                move_uploaded_file($filetmp, $filedesti);
                
                return "ppp";
            }
            return "ooo";
        }
        $prepareStatement  = "INSERT INTO `Logo`(`image`) VALUE(?)";

        $stmt = $con->prepare($prepareStatement);

        $executeResult = $stmt->execute([$finlenamenew]);

        if ($executeResult){

            move_uploaded_file($filetmp, $filedesti);

            return "hihi";
        }
        return "aaa";
    }
    public function GetLogo()
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM logo");

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
