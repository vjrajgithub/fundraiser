# Add a virtual host at your loacal developement box with host name
<VirtualHost *:80>
    ServerAdmin youremail@domain.com
    DocumentRoot "C:/xampp/htdocs/fundrasier"
    ServerName fund.shiftboolean.com
    ServerAlias fund.shiftboolean.com
    ErrorLog "C:/xampp/htdocs/logs/error.log"
    CustomLog "C:/xampp/htdocs/logs/access.log" combined
    <Directory "C:/xampp/htdocs/fundrasier">
        AllowOverride All
        Allow from all
    </Directory>
</VirtualHost>

# DB config file: src/application/config/database.php

# ClassName needs to be in UpperCamelCase (unless sytesm asks you explicityl the name format.
# ClassName and file name should match. e.g if my class is ClassName then file name nees to be ClassName.php

# use lowerCamelCase for $variableName.

# To check if an array key exists and to get its value, instead of using iseset()
like 
if (isset($arrayName['arrayKey'])) {
    $aGoodName = $arrayName['arrayKey'];
}

Use $aGoodName = ifseta($arrayName, 'arrayKey');

similarly for objects you can use
$aGoodName = ifseto($objectName, 'objectProperty');

These will return the value else null.


# Use /sb-helps/user_guide/ to know 'how to do things in codeigniter'
# Connect to DB when you need it, use this line.  $this->load->database();
# Query: $response = $this->db->query('YOUR QUERY HERE');
# Use $this->db->escape() to escape malicious sql-injection code.
$sql = "INSERT INTO table (title) VALUES(".$this->db->escape($title).")";
# Query Bindings
$sql = "SELECT * FROM some_table WHERE id = ? AND status = ? AND author = ?";
$this->db->query($sql, array(3, 'live', 'Rick'));

The question marks in the query are automatically replaced with the values in the array in the second parameter of the query function.

# handle db errors.
if ( ! $this->db->simple_query($mySqlQuery)) {
    $error = $this->db->error(); // Has keys 'code' and 'message'
}

# result_array()

This method returns the query result as a pure array, or an empty array when no result is produced. Typically you’ll use this in a foreach loop, like this:

$query = $this->db->query("YOUR QUERY");

foreach ($query->result_array() as $row) {
    echo $row['title'];
    echo $row['name'];
    echo $row['body'];
}

# Result Rows

row()

This method returns a single result row. If your query has more than one row, it returns only the first row. The result is returned as an object. Here’s a usage example:

$query = $this->db->query("YOUR QUERY");

$row = $query->row();

if (isset($row)) {
    echo $row->title;
    echo $row->name;
    echo $row->body;
}



