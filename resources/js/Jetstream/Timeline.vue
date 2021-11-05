<template>
  <div id="timeline">
    <article v-for="e in dataList" :key="e.id" :class="{ right: e.id % 2 === 0, left: e.id % 2 !== 0 }">
      <div class="badge">
        <a name="{{ e.start_year  }}">
          {{ e.start_year }}
        </a>
      </div>
      <div class="content">
        <h3>{{ e.title }}</h3>

        <div>{{ e.description }}</div>
      </div>
    </article>
  </div>
</template>

<script>
export default {
  /*company: "Urbanway"
created_at: "2021-10-15T18:44:39.000000Z"
description: "Specialized in Software development and design, Urbanway has proven during the years software qualities. Urbanway is also a personal portfolio of Flakerim Ismani"
edit: 0
end_month: null
end_year: null
id: 1
start_month: "June"
start_year: "2002"
title: "Founder"
updated_at: "2021-10-15T18:44:39.000000Z"
user_id: 1*/

  name: "Timeline",
  components: {},
  data() {
    return {};
  },
  props: {
    dataList: {
      type: Array,
    },
  },
};
</script>

<style rel="stylesheet/css" lang="css">
#timeline {
  display: block;
  position: relative;
  width: 100%;
}
#timeline article {
  display: block;
  position: relative;
  float: left;
  clear: left;
  width: 50%;
}
#timeline article.right {
  float: right;
  clear: right;
}

/* LINE */
#timeline:after {
  content: " ";
  display: block;
  clear: both;
}
#timeline:before {
  content: " ";
  position: absolute;

  top: 40px;
  bottom: 0px;
  left: 50%;

  width: 3px;
  margin-left: -1.5px;

  background-color: #eeeeee;
}

/* CONTENT BOX */
#timeline article div.content {
  position: relative;
  float: right;

  border: 1px solid #d4d4d4;
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);

  width: 60%;
  padding: 10px;
  background: #fff;
  margin-right: 80px;
  margin-top: 50px;
  margin-bottom: 50px;
}
#timeline article.right div.content {
  float: left;

  margin-right: 0;
  margin-left: 80px;
}

#timeline article figure,
#timeline article iframe,
#timeline article video {
  width: 100% !important;
  padding: 0 !important;
}

/* ARROWS */
#timeline article div.content:before {
  position: absolute;
  top: 10px;
  right: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-left: 15px solid #ccc;
  border-right: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}
#timeline article.right div.content:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}

#timeline article div.content:after {
  position: absolute;
  top: 11px;
  right: -13.7px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #fff;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}
#timeline article.right div.content:after {
  border-left-width: 0;
  border-right-width: 15px;
  left: -14px;
  right: auto;
}

/* BADGE */
#timeline article .badge a {
  text-decoration: none;
  color: inherit;
}
#timeline article .badge {
  position: absolute;
  top: 50px;
  right: 5px;
  z-index: 100;

  width: 50px;
  height: 50px;

  line-height: 50px;
  font-size: 1.2em;
  text-align: center;

  cursor: default;
}
#timeline article.right .badge {
  left: 5px;
}

#timeline article .badge:after {
  content: " ";
  display: block;
  position: absolute;
  top: 17px;
  right: -13px;
  z-index: 10;

  width: 8px;
  height: 8px;

  background: #fff;
  border-radius: 10px;
  border: 4px solid #eeeeee;
}
#timeline article.right > .badge:after {
  left: -13px;
}
</style>
