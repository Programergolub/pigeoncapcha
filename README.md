# PigeonCAPTCHA

This is a simple example of a CAPTCHA implementation using PHP, HTML, JavaScript, and CSS.

## Features

- Generates a random PigeonCAPTCHA text.
- Creates an image with the PigeonCAPTCHA text.
- Includes basic noise for added security.
- Allows users to enter the PigeonCAPTCHA and submit the form.
- Verifies the entered PigeonCAPTCHA against the server-side value.

## Installation

1. **Save the code:** Save the provided PHP, HTML, and CSS code files in a directory.
2. **Create a "fonts" directory** and place your desired font file in it.
3. **Update font path:** In `captcha.php`, replace `'./path/to/your/font.ttf'` with the actual path to your font file.
4. **Set up a web server:** Use a local web server (like Apache or Nginx) or a development server (like PHP's built-in server) to serve the files.

## Usage

1. Open `index.html` in your web browser.
2. Enter the PigeonCAPTCHA text from the image into the input field.
3. Click the "Submit" button.
4. The page will display a message indicating whether the PigeonCAPTCHA was verified correctly.

## Customization

- **Add more distortions:** Implement more complex distortions to the image (e.g., lines, curves, warping).
- **Enhance security:** Use more robust security measures (e.g., session management, IP rate limiting).
- **Improve appearance:** Customize the appearance of the PigeonCAPTCHA image and the form.

**Note:**

This is a basic example and may not be suitable for high-security applications. For production environments, consider using a dedicated CAPTCHA library or service.
