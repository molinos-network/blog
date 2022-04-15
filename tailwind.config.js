module.exports = {
  content: [ // archivos que contengan una llamada a tailwindcss para que el script lo compile en css -- parece ser que .php debo ir archivo por archivo//
    './**/*.php', 
    './themes/blog/_posts.php',
    './themes/blog/_404.php',
    './themes/blog/_footer.php',
    './themes/blog/_header.php',
    './themes/blog/_post.php',
    './index.php',
    './footer.php',
    './header.php',    
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
