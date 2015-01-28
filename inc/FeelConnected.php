<?php
/**
 * Created by PhpStorm.
 * User: nextlevelshit
 * Date: 26.10.14
 * Time: 11:09
 */

class sql {

    public $result = null;
    public $insert_id = null;
    public $data = array();

    protected $dbh,
              $selected = null;
    protected $username = SQL_USERNAME;
    protected $password = SQL_PASSWORD;
    protected $hostname = SQL_HOSTNAME;
    protected $table    = SQL_TABLE;

    public function __construct($table = null)
    {
        $this->dbh = mysql_connect($this->hostname, $this->username, $this->password) or die("Unable to connect to MySQL");

        $this->convertUTF();

        if($table)
            $this->select($table);
        else
            $this->select($this->table);

        mysql_query("set names 'utf8'",$this->dbh);
        mysql_query("set character set utf8",$this->dbh);
        mysql_query("set collation_connection = 'utf8'",$this->dbh);
    }

    public function __destruct ()
    {
        mysql_close($this->dbh);
    }

    function select ($db)
    {
        $this->selected = mysql_select_db($db, $this->dbh) or die("Could not select $db");
    }

    function query ($query, $save_result=true)
    {


        $this->data = array();
        $this->result = mysql_query($query);
        $this->insert_id = mysql_insert_id();

        if ($save_result)
        {
            while ($row = mysql_fetch_array($this->result)) {
                $this->data[] = $row;
            }
        }

        if ( DEBUG ) {
            echo "<pre style='margin-top: 100px;'>$query</pre>";
            echo "<pre>";
            var_dump($this->data);
            echo "</pre>";
        }

    }

    function get ($needle, $query)
    {
        $this->query($query);

        return $this->data[0][$needle];
    }

    function count ($needle, $query)
    {
        $this->query($query);

        return count($this->data);
    }

    function update ($query)
    {
        $this->data = array();
        $this->result = mysql_query($query);
    }

    function convertUTF ()
    {
        mysql_query("SET character_set_results=utf8", $this->dbh);
        mb_language('uni');
        mb_internal_encoding('UTF-8');
    }

}

?>