<?php
class ServiceModel extends AgentModel
{
    function getExec($where)
    {
        $ret = $this->get_exec($where);
        return $ret;
    }

    public function listProCity()
    {
        $sql = "select DISTINCT ProName, ProvIndex from province_city where 1=1 ";
        $content = $this->mysqlQuery($sql, "all");
        return $content;
    }

    public function listProCityIndex()
    {
//        $data = json_decode(file_get_contents('php://input'), true);
        $data = $_POST;
        $data['ProvIndex'] == null ? $provIndex = '' : $provIndex = " and ProvIndex = " . $data['ProvIndex'] . "";
        $sql = "select * from province_city where 1=1 {$provIndex}";
        $content = $this->mysqlQuery($sql, "all");
        return $content;
    }

    /**
     * jsoneditor 插入文章插件
     * @return array|bool|int|mysqli_result|null|string
     */
    public function addArticle()
    {
        $data = $_POST['data'];
        $arrData = array(
            "article" => "{$data['article']}",
            "obj_tab" => "{$data['obj_tab']}",
            "obj_id" => 0,
            "cdate" => time(),
            "state" => 0,
            "remark" => 0
        );
        $id = $this->mysqlInsert("article", $arrData, 'single', true);
        return $id;
    }

    public function addMedia()
    {
        $data = $_POST['data'];
        $arrData = array(
            "file_name" => "{$data['file_name']}",
            "file_info" => "{$data['file_info']}",
            "file_path" => "{$data['file_path']}",
            "obj_tab" => "{$data['obj_tab']}",
            "obj_id" => 0 ,
            "cdate" => time(),
            "state" => 0,
            "remark" => 0
        );
        $id = $this->mysqlInsert("media_file", $arrData, 'single', true);
        return $id;
    }

    /**
     * 上传文件
     */
    public function uploadUserFile()
    {
        $targetFolder = UPLOAD_PATH;
        $rs = 'error';
        if (!empty($_FILES)) {
            $tempFile = $_FILES['Filedata']['tmp_name'];
            $targetPath = $targetFolder;
            $fileName = time() . '_' . $_FILES['Filedata']['name'];
            $targetFile = rtrim($targetPath, '/') . '/' . $fileName;
//            echo $targetFile;
            $fileTypes = array('xls', 'xlsx', 'jpg', 'jpeg', 'avi', 'mp4', 'rar', 'doc', 'docx', 'png');
            $fileParts = pathinfo($_FILES['Filedata']['name']);
            if (in_array($fileParts['extension'], $fileTypes)) {
                move_uploaded_file($tempFile, $targetFile);

                $rs = $fileName;
            } else {
                $rs = 'error';
            }
        }
        return $rs;
    }
}