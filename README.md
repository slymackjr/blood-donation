<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>



<!-- PROJECT SHIELDS -->

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/slymackjr/blood-donation">
    <img src="screenshots/logo1.png" alt="Logo">
  </a>

  <h3 align="center">blood Donation App</h3>

  <p align="center">
    An awesome site to help others and save lives through your ability to donate blood and 
    assists patients in their difficult times.
    <br />
    <a href="https://github.com/slymackjr/blood-donation"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/slymackjr/blood-donation">View Demo</a>
    ·
    <a href="https://github.com/slymackjr/blood-donation/issues">Report Bug</a>
    ·
    <a href="https://github.com/slymackjr/blood-donation/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

[![Product Name Screen Shot][product-screenshot]](https://example.com)

The blood donation app is an online web application that tends to connect hospital
officer who will be acting as the recipient of blood in place of the one they need it.
The donors will get requests from various hospital officer to donate blood at a designated
time and place in a specified hospital to avoid scammers and theft all together. We aim at
helping people and save lives that are loss due to lack of blood.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

* [![PHP Version][PHP-shield]][PHP-url]
* [![HTML Version][HTML-shield]][HTML-url]
* [![CSS Version][CSS-shield]][CSS-url]
* [![Bootstrap][Bootstrap.com]][Bootstrap-url]
* [![Sass Version][Sass-shield]][Sass-url]
* [![JavaScript Version][JavaScript-shield]][JavaScript-url]


<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

Here we will be using git version control throughout the project and, you see how to use
git to work in this project of ours all together.
### Prerequisites

* Your web server (e.g., recommended xampp which has PHP, MYSQL database, and Servers all together)

## A work through Git version control

### Installation

1. Install git version control through this link for window users this is the link bellow.
This will give you a git bash command line that yoy can work with and just go with the default
settings when installing it.

    ```sh 
    https://git-scm.com/download/win
    ```    

2. After full installation is complete you can check your git version through your command line.
    ```sh
        git --version
    ```
    Then you will see your git installed version bellow.

3. Your can set your username after that for git to know who is making the changes for 
reference.
    ```shell
    git config --global user.name yourusername
    ```
   after that you do for email too.
    ```shell
    git --global user.email youremail@gmail.com
    ```
4. If in the later future you want to see who you are registered as you can check for both 
email and username.
    ```shell
    git config user.email
    ```
   ```shell
    git config user.name
    ```
## How git works
A repository is a container for a project you want to track with 
Git. Example a website project or a source code. You can have many git 
repo for many of your projects.

## How to work with Blood-Donation Repository
1. First you can clone this project since it's a team project and have the project 
repo in your local computer in the htdocs directory which you are going to be working on. You 
can change your directory i the git bash command line to get to htdocs.
    ```shell
    cd ..
    ```
    This will return you to your parent folder do this until you reach C or the letter of your root 
    folder. Then if your xampp is in the root folder you can head to htdocs directly.
    ```shell
    cd xampp/htdocs/
    ```
    After that you will reach your htdocs file where you can clone the project repo.

2. Clone the project through the project https link or SSH link provided it's your choice.
    In this demo we will use https URL.
    ```shell
    git clone https://github.com/slymackjr/blood-donation.git
    ```
3. If you already had the project and there are some changes that other team members have made. You 
    update your repo, since you are already in that repo directory which is the 
    blood-donation repo make sure it's in brackets in front of your path in the 
    git bash command to indicate your currently i the blood-donation repo. So first 
    add an alias to the https URL
    ```shell
    git remote add origin https://github.com/slymackjr/blood-donation.git
    ```
   Then you call pull the blood-donation repo to your local repo to update it if there 
    any changes.
    ```shell
    git pull origin blood-donation
    ```
   So it fetches all the code and merge it in your blood-donation branch.
4. Since your working on a group project you can't work with the main branch(blood-donation) 
    So you can create a new branch.
    ```shell
    git checkout -b temp
    ```
5. After finishing working on your project you in the new branch(temp) can 
    You can add your changes to the staging area.
    ```shell
    git add .
    ```
6. Then commit them after that.
    ```shell
    git commit -m "my current changes commit"
    ```
7. After that since your working on a group project you can't merge it locally since 
    others need to approve your code and approach of solving the problem. Therefore, 
    You have to merge the temp branch to the blood-donation master branch on GitHub where 
    they will decide either to merge it or leave it.
    ```shell
    git push origin temp
    ```
   Here where using the origin alias which specifies which repo we are pushing to in short form.
8. Then all hands are left to the project team leader and others to review your code and make comments 
    or approve it.
    
<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- CONTRIBUTING -->
## Contributing

Contributions are welcome! Follow the steps below:

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Jofrey Nyamasheki - [@your_twitter](https://twitter.com/your_username) 
Project Link: [https://github.com/slymackjr/Mobile-Shopping-Plaza](https://github.com/slymackjr/Mobile-Shopping-Plaza)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

I would like to thanks these wonder full tools that enable me to make it all happen.

* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Bootstrap](https://getbootstrap.com/)
* [SASS](https://sass-lang.com/)
* [Img Shields](https://shields.io)
* [GitHub Pages](https://pages.github.com)
* [Font Awesome](https://fontawesome.com)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/slymacljr/blood-donation.svg?style=for-the-badge
[contributors-url]: https://github.com/slymackjr/blood-donation/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/slymackjr/blood-donation.svg?style=for-the-badge
[forks-url]: https://github.com/slymackjr/blood-donation/network/members
[stars-shield]: https://img.shields.io/github/stars/slymackjr/blood-donation.svg?style=for-the-badge
[stars-url]: https://github.com/slymackjr/blood-donation/stargazers
[issues-shield]: https://img.shields.io/github/issues/slymackjr/blood-donation.svg?style=for-the-badge
[issues-url]: https://github.com/slymackjr/blood-donation/issues
[license-shield]: https://img.shields.io/github/license/slymackjr/blood-donation.svg?style=for-the-badge
[license-url]: https://github.com/slymackjr/blood-donation/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: screenshots/screen.png
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[Sass-shield]: https://img.shields.io/badge/Sass-v1.47.0-CC6699?style=for-the-badge&logo=sass&logoColor=white
[Sass-url]: https://sass-lang.com/
[HTML-shield]: https://img.shields.io/badge/HTML-v5-E34F26?style=for-the-badge&logo=html5&logoColor=white
[HTML-url]: https://developer.mozilla.org/en-US/docs/Web/HTML
[PHP-shield]: https://img.shields.io/badge/PHP-v8.0-777BB4?style=for-the-badge&logo=php&logoColor=white
[PHP-url]: https://www.php.net/
[CSS-shield]: https://img.shields.io/badge/CSS-v3-1572B6?style=for-the-badge&logo=css3&logoColor=white
[CSS-url]: https://developer.mozilla.org/en-US/docs/Web/CSS
[JavaScript-shield]: https://img.shields.io/badge/JavaScript-ES6-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black
[JavaScript-url]: https://developer.mozilla.org/en-US/docs/Web/JavaScript


