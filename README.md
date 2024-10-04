## Photography Booking System

## Overview

This project is a photography booking system designed to showcase the work of a photographer and allow clients to book sessions easily. The website features a clean and modern design, providing a user-friendly experience for both the photographer and potential clients.

## Features

- **Responsive Design**: Fully responsive layout that works seamlessly across desktops, tablets, and smartphones.

- **Slideshow Gallery**: A dynamic slideshow displays all photos related to each project, enhancing the visual experience.
![Uploading Screenshot 2024-10-04 141525.png…]()


- **Admin Authorization**: Secure admin panel for managing portfolio items and client bookings.
  ![Admin Authorization Screenshot](D:\Projects\Fareda\Fareeda\ReedMePhotos\Screenshot%202024-10-04%20141821.png)
  
  
  ![Admin Authorization Screenshot](D:\Projects\Fareda\Fareeda\ReedMePhotos\Screenshot%202024-10-04%20142006.png)

- **Category Matching**: Organizes portfolio items by matching them with categories using foreign IDs, making navigation intuitive.
  ![Category Matching Screenshot](D:\Projects\Fareda\Fareeda\ReedMePhotos\Screenshot%202024-10-04%20144326.png)

- ![Category Matching Screenshot](D:\Projects\Fareda\Fareeda\ReedMePhotos\Screenshot%202024-10-04%20144519.png)

## Technologies Used

- **Laravel**: The backend framework powering the web application.
- **Bootstrap 3**: Front-end framework used for responsive design.
- **SweetAlert2**: Provides enhanced alert handling and user feedback.
- **JavaScript**: Used for dynamic functionalities such as the slideshow.

## Docker

To run the application using Docker, ensure that Docker is installed on your machine and follow these steps:

1. **Clone the repository**:
   
   ```bash
   git clone https://github.com/Aya-Sherif/photographer-booking-system.git
   ```

2. **Navigate to the project directory**:
   
   ```bash
   cd photographer-booking-system
   ```

3. **Build and run the Docker container**:
   
   ```bash
   docker-compose up --build
   ```

4. **Run database migrations**:
   
   After starting the container, you will need to run the migrations to set up your database. Open another terminal window and execute:
   
   ```bash
   docker exec -it <container_name> php artisan migrate
   ```
   
   Replace `<container_name>` with the actual name of your running Docker container. You can find the container name by running `docker ps`.

5. **Access the application** in your web browser at `http://localhost:8000`.

## Screenshots

Here are some screenshots of the application:

!![Screenshot](ReedMePhotos\Ahmed-Fareed-10-04-2024_02_50_PM.png)

![Screenshot 3](D:\Projects\Fareda\Fareeda\ReedMePhotos\Ahmed-Fareed-10-04-2024_02_54_PM.png)

![Screenshot 3](D:\Projects\Fareda\Fareeda\ReedMePhotos\Screenshot%202024-10-04%20145544.png)

## Contributing

If you would like to contribute to this project, please fork the repository and submit a pull request with your changes.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
