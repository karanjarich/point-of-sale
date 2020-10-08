
                        <?php
                            include_once('connection_data.php');
                            $sql = "SELECT * FROM products";
                            //use for MySQLi-OOP
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                                echo
                                "<tr>
                                    <td>".$row['product_no']."</td>
                                    <td>".$row['products_name']."</td>
                                    <td>".$row['stock']."</td>
                                    <td>".$row['reorder_level']."</td>
                                     <td>
                                     <a href='#stock_".$row['product_no']."' class='btn btn-warning btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-plus'></span>Stock</a>
                                     <a href='#edit_".$row['product_no']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
                                     <a href='#delete_".$row['product_no']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                                    </td>
                                </tr>";
                                include('product_modal.php');
                                include('add_stock.php');
                            }

                        ?>