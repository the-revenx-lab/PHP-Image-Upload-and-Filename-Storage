# PHP-Image-Upload-and-Filename-Storage
This project is a simple PHP-based web application that allows users to upload image files to a server. The uploaded images are saved to a specified directory, and their filenames are stored in a text file for easy access and management.
## Technologies Used
- **PHP**: Server-side scripting language.
- **HTML5 & CSS3**: Markup and styling for the front-end.
- **XAMPP**: Local server for development.
- **Git**: Version control for code management.
- ## Installation

To run this project on your local machine, follow the steps below:

### Prerequisites:
1. Install **XAMPP** (or any local server environment that supports PHP).
   - Download XAMPP from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
   - Follow the installation instructions for your operating system.

2. **Git** (Optional, for version control):
   - Download Git from [https://git-scm.com/downloads](https://git-scm.com/downloads).

### Steps to Run the Project:

1. **Clone or download the repository**:
   - To clone the project, run the following command in your terminal:
     ```bash
     git clone https://github.com/your-username/php-image-upload.git
     ```

   - Alternatively, you can download the ZIP file of the repository from GitHub.

2. **Move the project folder to your local server's root directory**:
   - If you're using XAMPP, move the project folder to the `htdocs` directory, usually located at `C:\xampp\htdocs\`.

3. **Start Apache and MySQL (if needed) in XAMPP**:
   - Open the XAMPP control panel and start the Apache server. You don't need MySQL for this project, as it doesn't require a database.

4. **Access the project**:
   - Open your web browser and go to `http://localhost/php-image-upload` (or the directory name you used).
   - The image upload form should now be visible.

5. **Upload Images**:
   - Use the form to select and upload image files. Once uploaded, their filenames will be stored in a file named `image_filenames.txt` in the project directory.
## How to Use

- **Uploading Images**: 
   - Go to the homepage where the file upload form is displayed.
   - Select one or more image files and click on the "Upload Images" button.
   - Once uploaded, the filenames of the images will be stored in the `image_filenames.txt` file in the `uploads` folder.

- **Viewing the List of Filenames**:
   - After uploading, you can view the list of uploaded image filenames by opening the `image_filenames.txt` file. 
   - The file will be automatically updated with the names of the newly uploaded images.
