<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
<style>@charset "UTF-8";
@import url("https://fonts.googleapis.com/css?family=Open+Sans:100,400,700");
@keyframes shake {
  from {
    transform: translateX(0); }
  to {
    transform: translateX(0.3rem); } }

.container {
  width: 114rem;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center; }

.block {
  padding: 1.7rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: white; }

.separator {
  border-top: 1px solid rgba(0, 0, 0, 0.06);
  width: 100%; }

.flex-row {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between; }

*, *:after, *:before {
  padding: 0;
  margin: 0;
  box-sizing: inherit;
  -webkit-touch-callout: none;
  /* iOS Safari */
  -webkit-user-select: none;
  /* Safari */
  -khtml-user-select: none;
  /* Konqueror HTML */
  -moz-user-select: none;
  /* Firefox */
  -ms-user-select: none;
  /* Internet Explorer/Edge */
  user-select: none;
  /* Non-prefixed version, currently supported by Chrome and Opera */ }

html {
  font-size: 62.5%; }

body {
  font-size: 1.26rem;
  font-family: "Open Sans", Arial, sans-serif;
  box-sizing: border-box;
  height: 1200px; }

h1 {
  font-size: 2.8rem;
  font-weight: 700;
  padding-bottom: 1rem; }

h3 {
  font-size: 1.96rem;
  font-weight: 400;
  margin-bottom: 1.6rem; }

h4 {
  color: #0088CC;
  font-size: 1.68rem;
  text-transform: capitalize;
  font-weight: 700; }

h5 {
  color: #212529;
  font-size: 1.4rem;
  text-transform: uppercase;
  margin: 1.6rem 0; }

a {
  text-decoration: none;
  color: #999; }

li {
  list-style: none; }

del {
  color: rgba(145, 145, 145, 0.5);
  font-size: 1.3rem; }

input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
button,
textarea {
  -webkit-appearance: none; }

strong {
  font-weight: 700; }

.data-item-1 {
  display: flex;
  justify-content: space-between; }
  .data-item-1__left-side {
    margin-right: 5rem; }
  .data-item-1__header {
    font-size: 3.08rem;
    font-weight: 700;
    margin-bottom: 1.6rem; }
  .data-item-1__desc-lg {
    font-size: 2rem;
    font-weight: 400;
    margin-bottom: 1.6rem; }
  .data-item-1__desc-sm {
    font-size: 1.4rem;
    font-weight: 400; }
    .data-item-1__desc-sm:not(:last-of-type) {
      margin-bottom: 1.6rem; }
  .data-item-1__right-side {
    display: flex;
    flex-direction: column;
    align-items: center; }

.action-btn {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 1rem;
  background-color: #0088CC;
  color: white;
  font-size: 1.6rem;
  border-radius: 5px;
  margin: 0 .5rem; }

.btn {
  color: white;
  padding: 1.12rem 1.6rem;
  border-radius: .4rem;
  min-width: 11.5rem;
  display: flex;
  justify-content: center;
  align-items: center;
  text-transform: uppercase;
  font-size: 1.12rem;
  font-weight: 700;
  border: none;
  cursor: pointer; }
  .btn--primary {
    background-color: #0088CC; }
    .btn--primary:hover {
      background-color: #0077b3; }
  .btn--gray {
    background-color: #101214; }
    .btn--gray:hover {
      background-color: #272c30; }

.counter {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center; }
  .counter__header {
    font-size: 5rem;
    font-weight: 700;
    color: #0088CC; }
  .counter__data {
    font-size: 2rem;
    font-weight: 100;
    color: #444; }

.crud-actions {
  position: absolute;
  bottom: .5rem;
  right: 1.5rem; }
  .crud-actions a:hover {
    color: #0088CC; }

.dropdown {
  position: relative; }
  .dropdown__header {
    color: #999; }
  .dropdown__body {
    position: absolute;
    flex-direction: column;
    z-index: 10;
    top: 4rem;
    display: none;
    box-shadow: 0 10px 30px 10px rgba(0, 0, 0, 0.05);
    min-width: 18rem; }
  .dropdown__item {
    display: flex; }
  .dropdown__items {
    display: flex;
    width: 100%; }
  .dropdown--opened .dropdown__body {
    display: flex; }
  .dropdown--left > .dropdown__body {
    right: 0; }

.filters {
  max-width: 25%;
  min-width: 28.5rem;
  padding: 0 1.5rem;
  align-self: flex-start; }

.form-control {
  line-height: 1.85;
  border: 1px solid rgba(0, 0, 0, 0.198);
  border-radius: 4px;
  padding: .6rem 1.2rem;
  width: 100%;
  font-size: 1.4rem; }
  .form-control:focus, .form-control:active {
    outline: none;
    border: 1px solid #999; }

.form-group {
  display: flex;
  flex-direction: column;
  margin-bottom: 1.6rem;
  position: relative;
  flex-grow: 1; }
  .form-group__checkboxs {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; }
  .form-group__checkbox {
    display: flex;
    align-items: center;
    min-width: 50%;
    font-size: 1.4rem; }
    .form-group__checkbox span {
      padding: .4rem; }
  .form-group__radios {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; }
  .form-group__radio {
    display: flex;
    align-items: center;
    min-width: 50%;
    font-size: 1.4rem; }
    .form-group__radio span {
      padding: .4rem; }
  .form-group label {
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: .8rem; }
  .form-group.invalid label {
    color: #ed5348; }
  .form-group.invalid .form-control {
    border-color: #ed5348;
    position: relative; }
  .form-group.invalid::after {
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    font-weight: 700;
    font-family: "Font Awesome 5 Free";
    content: "";
    position: absolute;
    bottom: .725rem;
    right: .725rem;
    font-size: 2rem;
    width: 2.5rem;
    height: 2.5rem;
    background-color: #ed5348;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white; }

.form-row {
  display: flex;
  width: 100%;
  justify-content: stretch; }
  .form-row .form-group:not(:last-of-type) {
    padding-right: 1rem; }

.image {
  background-size: cover;
  background-position: center;
  margin: .3rem;
  position: relative; }
  .image--small {
    width: 3rem;
    height: 3rem; }
  .image--circle {
    border-radius: 50%;
    border: 2px solid #444; }

.increment-control {
  display: flex;
  margin-right: 1rem; }
  .increment-control__action {
    font-size: 1.2rem;
    width: 4.3rem;
    height: 4.3rem;
    color: #444;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid rgba(0, 0, 0, 0.06);
    font-weight: 700; }
    .increment-control__action:last-of-type {
      border-radius: 0 4px 4px 0;
      border-left-width: 0; }
    .increment-control__action:first-of-type {
      border-radius: 4px 0 0 4px;
      border-right-width: 0; }
    .increment-control__action:hover {
      background-color: #F7F7F7; }
  .increment-control > .form-control {
    font-weight: 700;
    width: 3.3rem;
    height: 4.3rem;
    border: 1px solid rgba(0, 0, 0, 0.06);
    text-align: center;
    font-size: 1.4rem; }

.info {
  display: flex;
  align-items: center;
  line-height: 2.4rem;
  padding: .6rem 1rem; }
  .info__icon {
    font-size: 1.512rem;
    color: #0088CC;
    padding-right: .5rem; }
  .info__data {
    color: #999; }

.item-listing {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  width: 100%;
  align-self: flex-start; }
  .item-listing__items {
    display: flex;
    flex-wrap: wrap; }
    .item-listing__items.item-listing--3items > .item-medium-1 {
      min-width: 33%; }
    .item-listing__items.item-listing--4items > .item-medium-1 {
      min-width: 25%; }
  .item-listing__tools {
    margin: 1.5rem;
    display: flex; }

.item-medium-1 {
  padding: 0 1.5rem;
  margin-bottom: 3rem;
  position: relative; }
  .item-medium-1__image {
    overflow: hidden;
    padding-top: 100%;
    width: 100%;
    position: relative; }
  .item-medium-1__alert {
    border-radius: 50%;
    background-color: #0088CC;
    border-bottom: 2px solid #006699;
    color: white;
    width: 4rem;
    height: 4rem;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    font-weight: 700;
    top: -1rem;
    right: 0;
    z-index: 5; }
  .item-medium-1__action {
    position: absolute;
    top: -5rem;
    opacity: 0;
    width: 100%;
    background-color: #0088CC;
    font-size: 1rem;
    color: white;
    text-transform: uppercase;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1.5rem;
    transition: all .2s; }
  .item-medium-1:hover .item-medium-1__action {
    top: 0;
    opacity: 1;
    z-index: 3; }
  .item-medium-1:hover .item-medium-1__image::after {
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: white;
    opacity: .3;
    z-index: 1; }

.item-small-1 {
  display: flex;
  width: 26rem;
  justify-content: space-between;
  align-items: center;
  padding: .5rem; }
  .item-small-1__data {
    display: flex;
    flex-direction: column;
    color: #999; }
  .item-small-1__title {
    font-weight: 700; }
  .item-small-1__description {
    font-size: 1.12rem; }
  .item-small-1__image-box {
    position: relative; }
  .item-small-1__image {
    width: 8rem;
    height: 8rem;
    display: block; }
  .item-small-1__action {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 2rem;
    height: 2rem;
    position: absolute;
    top: -.5rem;
    right: -.5rem;
    background-color: white;
    border-radius: 50%;
    font-size: 1rem;
    color: #000;
    box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.2); }

.lable {
  font-size: 1.3rem;
  font-weight: 700;
  text-transform: uppercase;
  padding: .5rem; }

.link {
  cursor: pointer; }
  .link__icon {
    font-size: 1.08rem;
    padding-right: .5rem; }
  .link:hover .link__icon {
    animation-name: shake;
    animation-direction: alternate;
    animation-iteration-count: infinite;
    animation-duration: .3s;
    animation-timing-function: linear; }

.list {
  display: flex;
  flex-direction: column;
  justify-content: space-between; }
  .list__item {
    background-color: white;
    padding-bottom: .8rem;
    padding-top: .8rem;
    padding-left: 1.2rem;
    padding-right: 1.2rem; }
  .list--hr {
    flex-direction: row; }
    .list--hr > .list__item:last-of-type {
      padding-right: 0; }
    .list--hr > .list__item:first-of-type {
      padding-left: 0; }
    .list--hr-separator .list__item:not(:last-of-type) {
      border-right: 1px solid rgba(0, 0, 0, 0.06); }
  .list--vr-separator .list__item:not(:last-of-type) {
    border-bottom: 1px solid rgba(0, 0, 0, 0.06); }

.notification {
  color: white;
  width: 1.5rem;
  height: 1.5rem;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: .9rem;
  position: absolute;
  top: -.5rem;
  right: -.3rem; }
  .notification--danger {
    background-color: #ed5348; }

.paging {
  display: flex;
  margin: 1.5rem;
  font-size: 1.4rem;
  color: #0088CC;
  font-weight: 400; }
  .paging__arrow {
    border: 1px solid rgba(0, 0, 0, 0.06);
    padding: .8rem 1.2rem; }
    .paging__arrow:first-of-type {
      border-radius: 4px 0 0 4px; }
    .paging__arrow:last-of-type {
      border-radius: 0 4px 4px 0; }
  .paging__number {
    border: 1px solid rgba(0, 0, 0, 0.06);
    padding: .8rem 1.2rem; }
    .paging__number.active {
      background-color: #0088CC;
      color: white; }

.rating {
  font-size: 1.4rem;
  display: flex;
  align-items: center;
  margin-bottom: 2rem; }
  .rating__stars {
    display: flex;
    color: #0088CC;
    padding: 0 .5rem 0 0; }
  .rating__data {
    font-size: 1.19rem;
    color: #777;
    font-weight: 400; }

.search-box {
  display: flex; }
  .search-box__input {
    border: 1px solid rgba(0, 0, 0, 0.198);
    flex-grow: 1;
    border-radius: 4px 0 0 4px;
    padding: .6rem 1.2rem; }
    .search-box__input:focus, .search-box__input:active {
      outline: none;
      border: 1px solid #999; }
  .search-box__btn {
    font-size: 1.18rem;
    padding: 1.5rem;
    color: white;
    background-color: #101214;
    border: 1px solid rgba(0, 0, 0, 0.06);
    border-radius: 0 4px 4px 0; }

.slider {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start; }
  .slider__items {
    width: 100%; }
  .slider__item {
    background-size: cover;
    display: none;
    width: 100%;
    padding-bottom: 100%; }
    .slider__item.active {
      display: flex; }
  .slider__indicators {
    right: calc(50% - 2.5rem);
    display: flex;
    width: 10rem;
    padding: 2rem;
    align-items: center;
    justify-content: space-evenly; }
  .slider__indicator {
    display: block;
    width: .8rem;
    height: .8rem;
    border-radius: 50%;
    background-color: #e4e3e3; }
    .slider__indicator:hover, .slider__indicator.active {
      background-color: #0088CC; }

.tabs {
  display: flex;
  justify-content: flex-start;
  width: 100%;
  min-height: 25.5rem;
  position: relative;
  flex-direction: column;
  margin-bottom: 5rem; }
  .tabs__headers {
    display: flex; }
  .tabs__header {
    position: relative;
    z-index: 2;
    border: 1px solid rgba(0, 0, 0, 0.06);
    border-top: 2px solid #e4e3e3;
    border-bottom-width: 0;
    border-radius: 4px 4px 0 0;
    padding: 1.6rem 2.4rem;
    background-color: #F7F7F7;
    margin-right: 1px;
    color: #0088CC; }
    .tabs__header.active {
      border-top-color: #0088CC;
      background-color: white;
      border-bottom-width: 0; }
  .tabs__bodies {
    padding: 2.4rem;
    border: 1px solid rgba(0, 0, 0, 0.06);
    min-height: 20rem;
    position: relative;
    top: -2px; }
  .tabs__body {
    font-size: 1.4rem; }
    .tabs__body:not(.active) {
      display: none; }

.tags {
  line-height: 2.6rem; }

.tag {
  background-color: #212529;
  border-radius: 5rem;
  color: white;
  padding: .2rem .8rem;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 1.05rem; }
  .tag:not(:last-of-type) {
    margin-right: .4rem; }

.taged-textbox {
  display: flex;
  flex-direction: column;
  border: 1px solid rgba(0, 0, 0, 0.198);
  border-radius: 4px;
  padding: 1.2rem; }
  .taged-textbox__data {
    display: flex;
    align-items: flex-start; }
  .taged-textbox__tags {
    display: flex;
    flex-wrap: wrap; }
  .taged-textbox__tag {
    background-color: #e4e3e3;
    padding: .5rem;
    border-radius: 10rem;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between; }
    .taged-textbox__tag:not(:last-of-type) {
      margin-right: 1rem; }
    .taged-textbox__tag span {
      padding: 0 .7rem; }
  .taged-textbox__remove {
    width: 1.5rem;
    height: 1.5rem;
    font-size: 1rem;
    border-radius: 50%;
    background-color: #444;
    color: #e4e3e3;
    display: flex;
    justify-content: center;
    align-items: center; }
  .taged-textbox__clear {
    font-size: 2rem; }
  .taged-textbox__textbox {
    border-width: 0;
    width: 100%;
    padding: 0;
    line-height: 1.85;
    font-size: 1.4rem; }
    .taged-textbox__textbox:focus, .taged-textbox__textbox:active {
      border-width: 0; }

.footer {
  height: 10rem; }

.header__upper {
  border-top: 3px solid #0088CC;
  border-bottom: 1px solid rgba(0, 0, 0, 0.06); }

.header__middle {
  padding-bottom: 1.6rem;
  padding-top: 1.6rem; }

.header__logo-box {
  display: flex;
  align-items: center;
  width: 10rem; }

.header__logo {
  width: 100%; }

.header__user-options {
  display: flex;
  align-items: center; }

.header__lower {
  background-color: #F7F7F7;
  padding: 0 1.5rem;
  margin-bottom: 4rem; }

.nav__item.dropdown > .dropdown__body {
  display: flex;
  visibility: hidden;
  top: 8rem; }

.nav__item.dropdown:hover > .dropdown__body {
  visibility: visible;
  top: 6.2rem;
  transition: all .2s ease-out; }

.nav__link {
  text-transform: uppercase;
  color: #444;
  font-weight: 700;
  font-size: 1.2rem;
  padding: 2.3rem 1.5rem;
  display: flex;
  align-items: center;
  justify-content: center; }
  .nav__link:hover {
    color: #0088CC; }

.nav__inner-link {
  padding: .6rem 1.8rem;
  display: flex; }
  .nav__inner-link:hover {
    background-color: #F7F7F7; }

.add-product {
  width: 100%;
  display: flex;
  align-items: flex-start; }
  .add-product__add {
    width: 70%;
    display: flex; }
  .add-product__images {
    width: 60%;
    position: relative; }
  .add-product__image-actions {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    width: 100%;
    position: absolute; }
  .add-product__image-action {
    font-size: 2rem;
    padding: 1.5rem; }
    .add-product__image-action i {
      color: #444;
      padding: .5rem; }
      .add-product__image-action i:hover {
        color: #0088CC; }
  .add-product__data {
    align-self: flex-start;
    padding: 0 3rem; }
  .add-product__discount {
    display: flex;
    width: 100%; }
    .add-product__discount .form-group {
      width: 50%; }
  .add-product__actions {
    display: flex;
    justify-content: flex-end; }
    .add-product__actions .btn:first-of-type {
      margin-right: 1rem; }
  .add-product .tabs {
    margin-bottom: 1rem; }

.login {
  width: 60%;
  margin: 0 auto;
  margin-top: 10vh;
  border: 1px solid rgba(0, 0, 0, 0.198);
  border-top: 4px solid #0088CC;
  border-radius: 1rem;
  padding: 2rem;
  display: flex;
  flex-direction: column; }
  .login__header {
    margin-bottom: 2rem; }
  .login__Password {
    position: relative; }
  .login__forget-password {
    position: absolute;
    right: 0;
    top: 0; }
  .login__register-now {
    color: #0088CC;
    font-size: 1.3rem;
    font-weight: 700;
    align-self: flex-end;
    padding-top: 1rem; }

.product-details {
  display: flex;
  flex-direction: column; }
  .product-details__main {
    width: 100%;
    margin-bottom: 3rem;
    display: flex; }
  .product-details__info {
    padding: 0 1.5rem; }
  .product-details__amount {
    font-size: 2.8rem;
    font-weight: 400;
    color: #444;
    margin-bottom: 2rem; }
  .product-details__desc {
    font-size: 1.4rem;
    color: #777;
    font-weight: 400;
    line-height: 2.6rem; }
    .product-details__desc p:not(:last-of-type) {
      margin-bottom: 2rem; }
  .product-details__add {
    display: flex;
    align-items: center;
    margin-bottom: 2.4rem;
    margin-top: 2.4rem; }
  .product-details__meta {
    font-size: 1.4rem;
    color: #777; }
    .product-details__meta a {
      color: #0088CC; }
  .product-details .slider {
    min-width: 54rem;
    padding: 0 1.5rem; }

.realated-product {
  width: 100%;
  margin-top: 5rem; }

/*!
 * Generated with CSS Flag Sprite generator (https://www.flag-sprites.com/)
 */
.flag {
  display: inline-block;
  width: 16px;
  height: 11px;
  background: url("../img/flags/flags.png") no-repeat; }
  .flag.flag-ad {
    background-position: -16px 0; }
  .flag.flag-ae {
    background-position: -32px 0; }
  .flag.flag-af {
    background-position: -48px 0; }
  .flag.flag-ag {
    background-position: -64px 0; }
  .flag.flag-ai {
    background-position: -80px 0; }
  .flag.flag-al {
    background-position: -96px 0; }
  .flag.flag-am {
    background-position: -112px 0; }
  .flag.flag-an {
    background-position: -128px 0; }
  .flag.flag-ao {
    background-position: -144px 0; }
  .flag.flag-ar {
    background-position: -160px 0; }
  .flag.flag-as {
    background-position: -176px 0; }
  .flag.flag-at {
    background-position: -192px 0; }
  .flag.flag-au {
    background-position: -208px 0; }
  .flag.flag-aw {
    background-position: -224px 0; }
  .flag.flag-ax {
    background-position: -240px 0; }
  .flag.flag-az {
    background-position: 0 -11px; }
  .flag.flag-ba {
    background-position: -16px -11px; }
  .flag.flag-bb {
    background-position: -32px -11px; }
  .flag.flag-bd {
    background-position: -48px -11px; }
  .flag.flag-be {
    background-position: -64px -11px; }
  .flag.flag-bf {
    background-position: -80px -11px; }
  .flag.flag-bg {
    background-position: -96px -11px; }
  .flag.flag-bh {
    background-position: -112px -11px; }
  .flag.flag-bi {
    background-position: -128px -11px; }
  .flag.flag-bj {
    background-position: -144px -11px; }
  .flag.flag-bm {
    background-position: -160px -11px; }
  .flag.flag-bn {
    background-position: -176px -11px; }
  .flag.flag-bo {
    background-position: -192px -11px; }
  .flag.flag-br {
    background-position: -208px -11px; }
  .flag.flag-bs {
    background-position: -224px -11px; }
  .flag.flag-bt {
    background-position: -240px -11px; }
  .flag.flag-bv {
    background-position: 0 -22px; }
  .flag.flag-bw {
    background-position: -16px -22px; }
  .flag.flag-by {
    background-position: -32px -22px; }
  .flag.flag-bz {
    background-position: -48px -22px; }
  .flag.flag-ca {
    background-position: -64px -22px; }
  .flag.flag-catalonia {
    background-position: -80px -22px; }
  .flag.flag-cd {
    background-position: -96px -22px; }
  .flag.flag-cf {
    background-position: -112px -22px; }
  .flag.flag-cg {
    background-position: -128px -22px; }
  .flag.flag-ch {
    background-position: -144px -22px; }
  .flag.flag-ci {
    background-position: -160px -22px; }
  .flag.flag-ck {
    background-position: -176px -22px; }
  .flag.flag-cl {
    background-position: -192px -22px; }
  .flag.flag-cm {
    background-position: -208px -22px; }
  .flag.flag-cn {
    background-position: -224px -22px; }
  .flag.flag-co {
    background-position: -240px -22px; }
  .flag.flag-cr {
    background-position: 0 -33px; }
  .flag.flag-cu {
    background-position: -16px -33px; }
  .flag.flag-cv {
    background-position: -32px -33px; }
  .flag.flag-cw {
    background-position: -48px -33px; }
  .flag.flag-cy {
    background-position: -64px -33px; }
  .flag.flag-cz {
    background-position: -80px -33px; }
  .flag.flag-de {
    background-position: -96px -33px; }
  .flag.flag-dj {
    background-position: -112px -33px; }
  .flag.flag-dk {
    background-position: -128px -33px; }
  .flag.flag-dm {
    background-position: -144px -33px; }
  .flag.flag-do {
    background-position: -160px -33px; }
  .flag.flag-dz {
    background-position: -176px -33px; }
  .flag.flag-ec {
    background-position: -192px -33px; }
  .flag.flag-ee {
    background-position: -208px -33px; }
  .flag.flag-eg {
    background-position: -224px -33px; }
  .flag.flag-eh {
    background-position: -240px -33px; }
  .flag.flag-england {
    background-position: 0 -44px; }
  .flag.flag-er {
    background-position: -16px -44px; }
  .flag.flag-es {
    background-position: -32px -44px; }
  .flag.flag-et {
    background-position: -48px -44px; }
  .flag.flag-eu {
    background-position: -64px -44px; }
  .flag.flag-fi {
    background-position: -80px -44px; }
  .flag.flag-fj {
    background-position: -96px -44px; }
  .flag.flag-fk {
    background-position: -112px -44px; }
  .flag.flag-fm {
    background-position: -128px -44px; }
  .flag.flag-fo {
    background-position: -144px -44px; }
  .flag.flag-fr {
    background-position: -160px -44px; }
  .flag.flag-ga {
    background-position: -176px -44px; }
  .flag.flag-gb {
    background-position: -192px -44px; }
  .flag.flag-gd {
    background-position: -208px -44px; }
  .flag.flag-ge {
    background-position: -224px -44px; }
  .flag.flag-gf {
    background-position: -240px -44px; }
  .flag.flag-gg {
    background-position: 0 -55px; }
  .flag.flag-gh {
    background-position: -16px -55px; }
  .flag.flag-gi {
    background-position: -32px -55px; }
  .flag.flag-gl {
    background-position: -48px -55px; }
  .flag.flag-gm {
    background-position: -64px -55px; }
  .flag.flag-gn {
    background-position: -80px -55px; }
  .flag.flag-gp {
    background-position: -96px -55px; }
  .flag.flag-gq {
    background-position: -112px -55px; }
  .flag.flag-gr {
    background-position: -128px -55px; }
  .flag.flag-gs {
    background-position: -144px -55px; }
  .flag.flag-gt {
    background-position: -160px -55px; }
  .flag.flag-gu {
    background-position: -176px -55px; }
  .flag.flag-gw {
    background-position: -192px -55px; }
  .flag.flag-gy {
    background-position: -208px -55px; }
  .flag.flag-hk {
    background-position: -224px -55px; }
  .flag.flag-hm {
    background-position: -240px -55px; }
  .flag.flag-hn {
    background-position: 0 -66px; }
  .flag.flag-hr {
    background-position: -16px -66px; }
  .flag.flag-ht {
    background-position: -32px -66px; }
  .flag.flag-hu {
    background-position: -48px -66px; }
  .flag.flag-ic {
    background-position: -64px -66px; }
  .flag.flag-id {
    background-position: -80px -66px; }
  .flag.flag-ie {
    background-position: -96px -66px; }
  .flag.flag-il {
    background-position: -112px -66px; }
  .flag.flag-im {
    background-position: -128px -66px; }
  .flag.flag-in {
    background-position: -144px -66px; }
  .flag.flag-io {
    background-position: -160px -66px; }
  .flag.flag-iq {
    background-position: -176px -66px; }
  .flag.flag-ir {
    background-position: -192px -66px; }
  .flag.flag-is {
    background-position: -208px -66px; }
  .flag.flag-it {
    background-position: -224px -66px; }
  .flag.flag-je {
    background-position: -240px -66px; }
  .flag.flag-jm {
    background-position: 0 -77px; }
  .flag.flag-jo {
    background-position: -16px -77px; }
  .flag.flag-jp {
    background-position: -32px -77px; }
  .flag.flag-ke {
    background-position: -48px -77px; }
  .flag.flag-kg {
    background-position: -64px -77px; }
  .flag.flag-kh {
    background-position: -80px -77px; }
  .flag.flag-ki {
    background-position: -96px -77px; }
  .flag.flag-km {
    background-position: -112px -77px; }
  .flag.flag-kn {
    background-position: -128px -77px; }
  .flag.flag-kp {
    background-position: -144px -77px; }
  .flag.flag-kr {
    background-position: -160px -77px; }
  .flag.flag-kurdistan {
    background-position: -176px -77px; }
  .flag.flag-kw {
    background-position: -192px -77px; }
  .flag.flag-ky {
    background-position: -208px -77px; }
  .flag.flag-kz {
    background-position: -224px -77px; }
  .flag.flag-la {
    background-position: -240px -77px; }
  .flag.flag-lb {
    background-position: 0 -88px; }
  .flag.flag-lc {
    background-position: -16px -88px; }
  .flag.flag-li {
    background-position: -32px -88px; }
  .flag.flag-lk {
    background-position: -48px -88px; }
  .flag.flag-lr {
    background-position: -64px -88px; }
  .flag.flag-ls {
    background-position: -80px -88px; }
  .flag.flag-lt {
    background-position: -96px -88px; }
  .flag.flag-lu {
    background-position: -112px -88px; }
  .flag.flag-lv {
    background-position: -128px -88px; }
  .flag.flag-ly {
    background-position: -144px -88px; }
  .flag.flag-ma {
    background-position: -160px -88px; }
  .flag.flag-mc {
    background-position: -176px -88px; }
  .flag.flag-md {
    background-position: -192px -88px; }
  .flag.flag-me {
    background-position: -208px -88px; }
  .flag.flag-mg {
    background-position: -224px -88px; }
  .flag.flag-mh {
    background-position: -240px -88px; }
  .flag.flag-mk {
    background-position: 0 -99px; }
  .flag.flag-ml {
    background-position: -16px -99px; }
  .flag.flag-mm {
    background-position: -32px -99px; }
  .flag.flag-mn {
    background-position: -48px -99px; }
  .flag.flag-mo {
    background-position: -64px -99px; }
  .flag.flag-mp {
    background-position: -80px -99px; }
  .flag.flag-mq {
    background-position: -96px -99px; }
  .flag.flag-mr {
    background-position: -112px -99px; }
  .flag.flag-ms {
    background-position: -128px -99px; }
  .flag.flag-mt {
    background-position: -144px -99px; }
  .flag.flag-mu {
    background-position: -160px -99px; }
  .flag.flag-mv {
    background-position: -176px -99px; }
  .flag.flag-mw {
    background-position: -192px -99px; }
  .flag.flag-mx {
    background-position: -208px -99px; }
  .flag.flag-my {
    background-position: -224px -99px; }
  .flag.flag-mz {
    background-position: -240px -99px; }
  .flag.flag-na {
    background-position: 0 -110px; }
  .flag.flag-nc {
    background-position: -16px -110px; }
  .flag.flag-ne {
    background-position: -32px -110px; }
  .flag.flag-nf {
    background-position: -48px -110px; }
  .flag.flag-ng {
    background-position: -64px -110px; }
  .flag.flag-ni {
    background-position: -80px -110px; }
  .flag.flag-nl {
    background-position: -96px -110px; }
  .flag.flag-no {
    background-position: -112px -110px; }
  .flag.flag-np {
    background-position: -128px -110px; }
  .flag.flag-nr {
    background-position: -144px -110px; }
  .flag.flag-nu {
    background-position: -160px -110px; }
  .flag.flag-nz {
    background-position: -176px -110px; }
  .flag.flag-om {
    background-position: -192px -110px; }
  .flag.flag-pa {
    background-position: -208px -110px; }
  .flag.flag-pe {
    background-position: -224px -110px; }
  .flag.flag-pf {
    background-position: -240px -110px; }
  .flag.flag-pg {
    background-position: 0 -121px; }
  .flag.flag-ph {
    background-position: -16px -121px; }
  .flag.flag-pk {
    background-position: -32px -121px; }
  .flag.flag-pl {
    background-position: -48px -121px; }
  .flag.flag-pm {
    background-position: -64px -121px; }
  .flag.flag-pn {
    background-position: -80px -121px; }
  .flag.flag-pr {
    background-position: -96px -121px; }
  .flag.flag-ps {
    background-position: -112px -121px; }
  .flag.flag-pt {
    background-position: -128px -121px; }
  .flag.flag-pw {
    background-position: -144px -121px; }
  .flag.flag-py {
    background-position: -160px -121px; }
  .flag.flag-qa {
    background-position: -176px -121px; }
  .flag.flag-re {
    background-position: -192px -121px; }
  .flag.flag-ro {
    background-position: -208px -121px; }
  .flag.flag-rs {
    background-position: -224px -121px; }
  .flag.flag-ru {
    background-position: -240px -121px; }
  .flag.flag-rw {
    background-position: 0 -132px; }
  .flag.flag-sa {
    background-position: -16px -132px; }
  .flag.flag-sb {
    background-position: -32px -132px; }
  .flag.flag-sc {
    background-position: -48px -132px; }
  .flag.flag-scotland {
    background-position: -64px -132px; }
  .flag.flag-sd {
    background-position: -80px -132px; }
  .flag.flag-se {
    background-position: -96px -132px; }
  .flag.flag-sg {
    background-position: -112px -132px; }
  .flag.flag-sh {
    background-position: -128px -132px; }
  .flag.flag-si {
    background-position: -144px -132px; }
  .flag.flag-sj {
    background-position: -160px -132px; }
  .flag.flag-sk {
    background-position: -176px -132px; }
  .flag.flag-sl {
    background-position: -192px -132px; }
  .flag.flag-sm {
    background-position: -208px -132px; }
  .flag.flag-sn {
    background-position: -224px -132px; }
  .flag.flag-so {
    background-position: -240px -132px; }
  .flag.flag-somaliland {
    background-position: 0 -143px; }
  .flag.flag-sr {
    background-position: -16px -143px; }
  .flag.flag-ss {
    background-position: -32px -143px; }
  .flag.flag-st {
    background-position: -48px -143px; }
  .flag.flag-sv {
    background-position: -64px -143px; }
  .flag.flag-sx {
    background-position: -80px -143px; }
  .flag.flag-sy {
    background-position: -96px -143px; }
  .flag.flag-sz {
    background-position: -112px -143px; }
  .flag.flag-tc {
    background-position: -128px -143px; }
  .flag.flag-td {
    background-position: -144px -143px; }
  .flag.flag-tf {
    background-position: -160px -143px; }
  .flag.flag-tg {
    background-position: -176px -143px; }
  .flag.flag-th {
    background-position: -192px -143px; }
  .flag.flag-tibet {
    background-position: -208px -143px; }
  .flag.flag-tj {
    background-position: -224px -143px; }
  .flag.flag-tk {
    background-position: -240px -143px; }
  .flag.flag-tl {
    background-position: 0 -154px; }
  .flag.flag-tm {
    background-position: -16px -154px; }
  .flag.flag-tn {
    background-position: -32px -154px; }
  .flag.flag-to {
    background-position: -48px -154px; }
  .flag.flag-tr {
    background-position: -64px -154px; }
  .flag.flag-tt {
    background-position: -80px -154px; }
  .flag.flag-tv {
    background-position: -96px -154px; }
  .flag.flag-tw {
    background-position: -112px -154px; }
  .flag.flag-tz {
    background-position: -128px -154px; }
  .flag.flag-ua {
    background-position: -144px -154px; }
  .flag.flag-ug {
    background-position: -160px -154px; }
  .flag.flag-um {
    background-position: -176px -154px; }
  .flag.flag-us {
    background-position: -192px -154px; }
  .flag.flag-uy {
    background-position: -208px -154px; }
  .flag.flag-uz {
    background-position: -224px -154px; }
  .flag.flag-va {
    background-position: -240px -154px; }
  .flag.flag-vc {
    background-position: 0 -165px; }
  .flag.flag-ve {
    background-position: -16px -165px; }
  .flag.flag-vg {
    background-position: -32px -165px; }
  .flag.flag-vi {
    background-position: -48px -165px; }
  .flag.flag-vn {
    background-position: -64px -165px; }
  .flag.flag-vu {
    background-position: -80px -165px; }
  .flag.flag-wales {
    background-position: -96px -165px; }
  .flag.flag-wf {
    background-position: -112px -165px; }
  .flag.flag-ws {
    background-position: -128px -165px; }
  .flag.flag-xk {
    background-position: -144px -165px; }
  .flag.flag-ye {
    background-position: -160px -165px; }
  .flag.flag-yt {
    background-position: -176px -165px; }
  .flag.flag-za {
    background-position: -192px -165px; }
  .flag.flag-zanzibar {
    background-position: -208px -165px; }
  .flag.flag-zm {
    background-position: -224px -165px; }
  .flag.flag-zw {
    background-position: -240px -165px; }
</style>
</head>

<body>

    <!-- header -->
    <div class="header">
        <!-- upper header -->
        <div class="header__upper">
            <!-- container -->
            <div class="container">
                <!-- contact info -->
                <ul class="list list--hr list--hr-separator">
                    <li class="list__item">
                        <span class="info">
                            <!-- icon -->
                            <i class="info__icon far fa-dot-circle"></i>
                            <!-- info -->
                            <span class="info__data">1234 Street Name, City Name</span>
                        </span>
                    </li>
                    <li class="list__item">
                        <a href="#" class="info">
                            <!-- icon -->
                            <i class="info__icon fab fa-whatsapp"></i>
                            <!-- info -->
                            <span class="info__data">123-456-7890</span>
                        </a>
                    </li>
                    <li class="list__item">
                        <a href="#" class="info">
                            <!-- icon -->
                            <i class="info__icon far fa-envelope"></i>
                            <!-- info -->
                            <span class="info__data">mail@domain.com</span>
                        </a>
                    </li>
                </ul>
                <!-- side menu -->
                <ul class="list list--hr">
                    <li class="list__item">
                        <a href="#" class="link">
                            <!-- icon -->
                            <i class="link__icon fas fa-angle-right"></i>
                            <!-- info -->
                            About Us
                        </a>
                    </li>
                    <li class="list__item">
                        <a href="#" class="link">
                            <!-- icon -->
                            <i class="link__icon fas fa-angle-right"></i>
                            <!-- info -->
                            Contact Us
                        </a>
                    </li>
                    <!-- languges -->
                    <li class="list__item">
                        <!-- drop down -->
                        <!-- to oppen dropdown dropdown--opened -->
                        <div class="dropdown ">
                            <!-- header -->
                            <div class="dropdown__header">
                                <a href="#" class="link">
                                    <img class="flag flag-us" src="" alt="">
                                    English
                                </a>
                                <i class="fas fa-angle-down"></i>
                            </div>

                            <!-- items -->
                            <div class="dropdown__body">
                                <ul class="dropdown__items list">
                                    <li class="dropdown__item list__item">
                                        <a href="#" class="link">
                                            <img class="flag flag-us" src="" alt="">
                                            English
                                        </a>
                                    </li>
                                    <li class="dropdown__item list__item">
                                        <a href="#" class="link">
                                            <img class="flag flag-es" src="" alt="">
                                            Español
                                        </a>
                                    </li>
                                    <li class="dropdown__item list__item">
                                        <a href="#" class="link">
                                            <img class="flag flag-fr" src="" alt="">
                                            Française
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- middle header -->
        <div class="header__middle container">
            <!-- logo -->
            <a href="#" class="header__logo-box">
                <img class="header__logo" src="img/logo.png" alt="">
            </a>
            <!-- user options -->
            <div class="header__user-options">
                <!-- login control -->
                <a href="#" class="link">Login</a>
                <div class="dropdown">
                    <div class="dropdown__header">
                        <div class="image image--small image--circle" style="background-image: url('img/PersonalImage.png')">
                        </div>
                    </div>
                    <div class="dropdown__body">

                    </div>
                </div>
                <!-- shopping card dropdown -->
                <!-- dropdown--opened to open -->
                <div class="dropdown dropdown--left  ">
                    <!-- header -->
                    <div class="dropdown__header">
                        <div class="image image--small" style="background-image: url('img/icons/icon-cart-big.svg')">
                            <div class="notification notification--danger">
                                1
                            </div>
                        </div>
                    </div>
                    <!-- body -->
                    <div class="dropdown__body">
                        <!-- items -->
                        <ul class="dropdown__items list list--vr-separator">
                            <li class="dropdown__item list__item">
                                <!-- item small 2 -->
                                <div class="item-small-1">
                                    <!-- item data -->
                                    <div class="item-small-1__data">
                                        <!-- title -->
                                        <a href="" class="item-small-1__title">Camera X1000</a>
                                        <!-- price -->
                                        <span class="item-small-1__description">
                                            1 X $890
                                        </span>
                                    </div>
                                    <!-- item image -->
                                    <div class="item-small-1__image-box">
                                        <a href="#" class="item-small-1__image image" style="background-image: url('img/products/product-1.jpg')">
                                        </a>
                                        <a href="#" class="item-small-1__action">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown__item list__item">
                                <div class="item-small-1">
                                    <!-- item data -->
                                    <div class="item-small-1__data">
                                        <!-- title -->
                                        <a href="" class="item-small-1__title">Camera X2000</a>
                                        <!-- price -->
                                        <span class="item-small-1__description">
                                            2 X $990
                                        </span>
                                    </div>
                                    <!-- item image -->
                                    <div class="item-small-1__image-box">
                                        <a href="#" class="item-small-1__image image" style="background-image: url('img/products/product-1.jpg')">
                                        </a>
                                        <a href="" class="item-small-1__action">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- totals -->
                        <div class="separator"></div>
                        <div class="block">
                            <span class="lable">Total:</span>
                            <span class="lable">$2870</span>
                        </div>
                        <!-- actions -->
                        <div class="block list list--hr">
                            <a class="list-item btn btn--gray" href="">View Cart</a>
                            <a class="list-item btn btn--primary" href="">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- lower header -->
        <div class="header__lower container">
            <!-- navigation -->
            <nav class="nav">
                <ul class="nav__items list list--hr">
                    <!-- items -->
                    <li class="nav__item">
                        <a class="nav__link" href="/home">Home</a>
                    </li>
                    <li class="nav__item dropdown ">
                        <!-- title -->
                        <a class="nav__link dropdown__header" href="#">
                            Products
                        </a>
                        <!-- items -->
                        <div class="dropdown__body">
                            <ul class=" list">
                                <li class="list__item">
                                    <a class="nav__inner-link" href="#">Product Listing</a>
                                </li>
                                <li class="list__item">
                                    <a class="nav__inner-link" href="#">Add Product</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#">Contact Us</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#">About Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Listing Items -->
    <div class="product-details container">
        <section class="product-details__main">
            <!-- images slider -->
            <div class="slider">
                <div class="slider__items">
                    <div class="slider__item active" style="background-image: url(img/products/product-grey-7.jpg)"></div>
                    <div class="slider__item" style="background-image: url(img/products/product-grey-7.jpg)"></div>
                    <div class="slider__item" style="background-image: url(img/products/product-grey-7.jpg)"></div>
                </div>
                <div class="slider__indicators">
                    <span class="slider__indicator active"></span>
                    <span class="slider__indicator"></span>
                    <span class="slider__indicator"></span>
                </div>
            </div>
            <!-- product info -->
            <div class="product-details__info">
                <h1>{{$product->name}}</h1>
               
                <div class="rating">
                    <div class="rating__stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="rating__data">
                        2 reviews
                    </div>
                </div>
                <div class="product-details__amount">
                    $ {{$product->price}}
                </div>
                <p class="product-details__desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing.
                    Fusce in hendrerit purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh
                    sed elimttis adipiscing. Fusce in hendrerit purus.
                </p>
                <div class="product-details__add">
                    <div class="increment-control">
                        <a href="#" class="increment-control__action">-</a>
                        <input type="text" class="form-control" title="Qty" value="1">
                        <a href="#" class="increment-control__action">+</a>
                    </div>
                    <button href="#" class="btn btn--primary">Add to cart</button>
                </div>
                <div class="product-details__meta">
                    Categories: <a rel="tag" href="#">Accessories</a>, <a rel="tag" href="#">Bags</a>.
                </div>
            </div>
        </section>
        <section class="tabs">
            <div class="tabs__headers">
                <div class="tabs__header active">
                    Description
                </div>
                <div class="tabs__header">
                    Additional Information
                </div>
                <div class="tabs__header">
                    Reviews (2)
                </div>
            </div>
            <div class="tabs__bodies">
                <div class="tabs__body active">
                    <div class="product-details__desc">
                        <p>
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit,
                            mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis
                            dapibus.
                        </p>
                        <p>
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit,
                            mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis
                            dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                        </p>
                    </div>   
                </div>
                <div class="tabs__body ">
                    tab2
                </div>
                <div class="tabs__body">
                    tab3
                </div>
            </div>
        </section>
        <div class="separator"></div>
      
    </div>
    <!-- footer -->
    <div class="footer">
        <!-- subscription -->
        <div></div>
        <!-- menu -->
        <div></div>
        <!-- contact info -->
        <div></div>
    </div>
</body>

</html>