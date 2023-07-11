
# Side Hustle Analysis 💪
Side hustle refers to a side activity or job that a person does in addition to their main job. A side hustle can be a small business, freelance job, freelance project, or any other activity undertaken to earn money or pursue personal interests as a way to generate additional income outside of a full-time job.

### Goals
 - Identifying Income Potential
 - Identifying Trends and Opportunities
 - Decision-making Based on Data

<a href="https://www.kaggle.com/datasets/dekomorisanae09/side-hustles-2023-2018">click here for dataset</a>

# Data Pre-Processing
### Filtering by Region
<div>The data we analyze only that consist of 25 region or more:</div>
<span>
<img src="https://github.com/Chrystalia/sidehustle-analysis/blob/main/public/Documentation/Interest%20By%20Region%20Before%20Filter.png" style="width:300px">
<img src="https://github.com/Chrystalia/sidehustle-analysis/blob/main/public/Documentation/Interest%20By%20Region%20After%20Filter.png" style="width:300px">
</span>

### Smoothing
<div>Scatter plot before smoothing:</div>  
<img src="https://github.com/Chrystalia/sidehustle-analysis/blob/main/public/Documentation/Interest%20Over%20Time%20Before%20Smoothing.png"> 
Scatter plot after 8 window smoothing:
<img src="https://github.com/Chrystalia/sidehustle-analysis/blob/main/public/Documentation/Interest%20Over%20Time%20After%208%20WIndow%20Smoothing.png">

### Data Integration from Multiple Side Hustle Category
<div>Data: Interest by Region, Interest Over Time, Related Query</div>
<span>
<img src="https://github.com/Chrystalia/sidehustle-analysis/blob/main/public/Documentation/Integration%20Interest%20by%20Region.png" style="height:200px">
<img src="https://github.com/Chrystalia/sidehustle-analysis/blob/main/public/Documentation/Integration%20Interest%20Over%20Time.png" style="height:200px">
<img src="https://github.com/Chrystalia/sidehustle-analysis/blob/main/public/Documentation/Integration%20Related%20Query.png" style="height:200px">
</span>

# Data Visualization
### Interest by Region using Choropleth Maps
<img src="https://github.com/Chrystalia/sidehustle-analysis/blob/main/public/Documentation/Dropshipping%20Choropleth%20Maps%20.png">

### Interest Over Time using Scatter Plot
<img src="https://github.com/Chrystalia/sidehustle-analysis/blob/main/public/Documentation/Dropshipping%20Scatter%20Plot.png">

### Related Queries using Wordcloud
<img src="https://github.com/Chrystalia/sidehustle-analysis/blob/main/public/Documentation/Dropshipping%20WordCloud.png">

# Website Demonstration 📺
[![sidehustle-analysis](https://img.youtube.com/vi/BpeTMQ76uNo/0.jpg)](https://www.youtube.com/watch?v=BpeTMQ76uNo)

or

<a href="youtu.be/BpeTMQ76uNo"> Click Here for Demo </a>

# Features & Tech ⚙️
- Python
- HTML
- Javascript
- CSS by using Tailwind Framework
- Laravel Framework
  
# Clone & Run Laravel Project 📦
(Make sure your device have <a href="https://nodejs.org/en/download">npm</a> and <a href="https://getcomposer.org/download/">composer</a> installed)

In a terminal:
- Clone the repository 
```sh
    git clone https://github.com/Chrystalia/sidehustle-analysis.git
```

- Redirect to cloned folder  
```sh
    cd .\sidehustle-analysis\
```

- Install composer 
```sh
    composer install
```

- Install tailwindcss and its peer dependencies via npm 
```sh
    npm install -D tailwindcss postcss autoprefixer
```

- Run build process  
```sh
    npm run dev
```

Open a new terminal (make sure you're in the right directory):
- Make copy of env.example into .env 
```sh
    copy .env.example .env
```

- Generate the APP_KEY value in your .env file 
```sh
    php artisan key:generate
```

- Run application on a PHP development server 
```sh
    php artisan serve
```


# Reference 🔗
- https://nodejs.org/en/download
- https://phoenixnap.com/kb/install-node-js-npm-on-windows
- https://tailwindcss.com/docs/guides/laravel
- https://laravel.com/docs/10.x/readme
- https://www.kaggle.com/code/dekomorisanae09/side-hustles-analysis


<p align='center'>
  <b>Follow us here 🌿</b><br>  
  <a href="https://github.com/Chrystalia">Chrystalia</a> |
  <a href="https://github.com/danielzergew">danielzergew</a> |
  <a href="https://github.com/nadyaclrp">nadyaclrp</a><br><br>
  Don't forget to leave a star if you find this repository helpful ⭐
</p>
 
