# vu
> This is the frontend vue.js for communicating with the backend lumen authentication server, it provides a basic login screen/ registration screen and dashboard to get started


## Build Setup

``` bash
# install dependencies
npm install

#setup connection to lumen server
in src/main.js set 'Vue.http.options.root' to the location of the lumen server

# serve with hot reload at localhost:8080
npm run dev

# build for production with minification
npm run build

# build for production and view the bundle analyzer report
npm run build --report
```

This vue.js project is based on a template provided via the link below.
For a detailed explanation on how things work, check out the [guide](http://vuejs-templates.github.io/webpack/) and [docs for vue-loader](http://vuejs.github.io/vue-loader).
