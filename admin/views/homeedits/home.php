

<head>
    <title>Add Course</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

    <div class="container">
        <h1>Add Course</h1>
        <form method="post" enctype="multipart/form-data" action="#">
            <label>ID:</label>
            <input type="number" name="id" required><br>

            <label>Number of Students:</label>
            <input type="number" name="number_of_students" required><br>

            <label>Duration:</label>
            <input type="time" name="duration" required><br>

            <label>Rating:</label>
            <input type="number" step="0.1" name="rating" required><br>

            <label>Number of Comments:</label>
            <input type="number" name="number_of_comments" required><br>

            <label>Price:</label>
            <input type="number" step="0.01" name="price" required><br>

            <label>Name:</label>
            <input type="text" name="name" required><br>

            <label>Displayed:</label>
            <input type="number" name="displayed"><br>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*"><br>

            <input type="submit" value="submit" name="submit">
            
        </form>
        <?php
                if(isset($_POST['submit'])  ) {
                    if (isset($_FILES['image'])){
                        if ($_FILES['image']['size'] != 0 ) {
                            $id = $_POST['id'];
                            $number_of_students = $_POST['number_of_students'];
                            $duration = $_POST['duration'];
                            $rating = $_POST['rating'];
                            $number_of_comments = $_POST['number_of_comments'];
                            $price = $_POST['price'];
                            $name = $_POST['name'];
                            $displayed = isset($_POST['displayed']) ? 1 : 0;
                            $imgData = (file_get_contents($_FILES['image']['tmp_name']));
                            
                            // Validate form data
                            /*if (!is_numeric($id) || !is_numeric($number_of_students) || !is_numeric($number_of_comments)) {
                            die("Invalid data format");
                            }
                            
                            // Get image data
                            $imageData = file_get_contents($_FILES['image']['tmp_name']);
                
                            // Convert the binary image data to a base64-encoded string
                            $base64Image = base64_encode($imageData);*/
                            
                            
                            // Create row data
                            $row = array(
                            'id' => $id,
                            'number_of_students' => $number_of_students,
                            'duration' => $duration,
                            'rating' => $rating,
                            'number_of_comments' => $number_of_comments,
                            'price' => $price,
                            'image' => $imgData,
                            'name' => $name,
                            'displayed' => $displayed
                            );
                            
                            // Call insert function
                            if ($this->insert('courses', $row)) {
                            echo "Record added successfully";
                            } else {
                            echo "Error adding record";
                            }
                        }
                        else{
                            echo "3 fail";
                        }
                    }
                    else{
                        echo "2 fail";
                    }    
                }
                else{
                    echo "1 fail";
                }    
                
                
            ?>    
        
    </div>

