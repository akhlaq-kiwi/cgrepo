<?php
require('includes/config.php');
//hello test
$sql = "insert into tbl_states (state_id, state_name, state_uri, add_date, update_date) VALUES(1, 'Delhi', 'delhi', '2012-02-27 12:55:04', '2012-02-27 12:55:04'),(2, 'Uttar Pradesh', 'uttar_pradesh', '2012-02-27 12:55:04', '2012-02-27 12:55:04'),(3, 'Andaman and Nicobar Islands ', 'andaman_and_nicobar_islands ', '2012-02-27 12:55:04', '2012-02-27 12:55:04'),(4, 'Andhra Pradesh ', 'andhra_pradesh ', '2012-02-27 12:55:04', '2012-02-27 12:55:04'),(5, 'Arunachal Pradesh ', 'arunachal_pradesh ', '2012-02-27 12:55:04', '2012-02-27 12:55:04'),(6, 'Assam ', 'assam ', '2012-02-27 12:55:04', '2012-02-27 12:55:04'),(7, 'Bihar ', 'bihar ', '2012-02-27 12:55:04', '2012-02-27 12:55:04'),(8, 'Chandigarh ', 'chandigarh ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(9, 'Chhattisgarh ', 'chhattisgarh ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(10, 'Dadra and Nagar Haveli ', 'dadra_and_nagar_haveli ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(11, 'Daman and Diu ', 'daman_and_diu ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(12, 'Goa ', 'goa ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(13, 'Gujarat ', 'gujarat ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(14, 'Haryana ', 'haryana ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(15, 'Himachal Pradesh ', 'himachal_pradesh ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(16, 'Jammu and Kashmir ', 'jammu_and_kashmir ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(17, 'Jharkhand ', 'jharkhand ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(18, 'Karnataka ', 'karnataka ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(19, 'Kerala ', 'kerala ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(20, 'Lakshadweep ', 'lakshadweep ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(21, 'Madhya Pradesh ', 'madhya_pradesh ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(22, 'Maharashtra ', 'maharashtra ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(23, 'Manipur ', 'manipur ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(24, 'Meghalaya ', 'meghalaya ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(25, 'Mizoram ', 'mizoram ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(26, 'Nagaland ', 'nagaland ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(27, 'Orissa ', 'orissa ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(28, 'Pondicherry ', 'pondicherry ', '2012-02-27 12:55:05', '2012-02-27 12:55:05'),(29, 'Punjab ', 'punjab ', '2012-02-27 12:55:06', '2012-02-27 12:55:06'),(30, 'Rajasthan ', 'rajasthan ', '2012-02-27 12:55:06', '2012-02-27 12:55:06'),(31, 'SikkimTamil ', 'sikkimtamil ', '2012-02-27 12:55:06', '2012-02-27 12:55:06'),(32, 'Nadu ', 'nadu ', '2012-02-27 12:55:06', '2012-02-27 12:55:06'),(33, 'Tripura ', 'tripura ', '2012-02-27 12:55:06', '2012-02-27 12:55:06'),(34, 'Uttarakhand ', 'uttarakhand ', '2012-02-27 12:55:06', '2012-02-27 12:55:06'),(35, 'West Bengal', 'west_bengal', '2012-02-27 12:55:06', '2012-02-27 12:55:06');";
print $DB->execute($sql);
