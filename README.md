# Custom WordPress Theme

This is a custom WordPress theme that utilizes @wordpress/scripts for asset bundling and SCSS with modules for styling.

## Installation

Before starting development, ensure you have [Node.js](https://nodejs.org/) installed on your system.

1. Clone the repository:

   ```sh
   git clone <repository-url>
   cd <project-directory>
   ```

2. Install dependencies:
   ```sh
   npm install
   ```

## Development

To start the development server and enable file watching, run:

```sh
npm run start
```

This command will compile JavaScript and SCSS files in development mode and watch for changes.

## Building for Production

To create optimized production-ready assets, run:

```sh
npm run build
```

This will generate minified and optimized JavaScript and CSS files for deployment.

## SCSS Modules

This project uses SCSS with modules for styling. SCSS files should be structured within the `src` directory and imported as needed in JavaScript files.

## File Structure

```
/project-root
├── assets/
│   ├── js/       # JavaScript files
│   ├── scss/     # SCSS styles
│   ├── fonts/    # Fonts
├── build/        # Compiled assets (output after build)
├── node_modules/ # Installed dependencies
├── package.json  # Project metadata and scripts
├── index.php     # PHP templates are in theme root category
└── README.md
```

## Requirements

- WordPress installed and configured
- Node.js (LTS recommended)
- npm
