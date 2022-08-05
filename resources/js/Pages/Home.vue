<template>
    <h1>Home</h1>
    
<div class="main">
        <div class="subcontainer">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://i.pinimg.com/originals/8e/18/0f/8e180f0838c4d436e10201deb14c6683.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://wallpaperaccess.com/full/1179580.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://c4.wallpaperflare.com/wallpaper/193/556/883/car-neon-chevrolet-corvette-race-cars-hd-wallpaper-preview.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
        
    </div>
        
    </template>

<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'
const message = 'Hello world, inertia is under attack'
const number = ref(0)
function increment() {
    number.value++;
}
function decrement() {
    number.value--;
}
</script>


<script>
export default {
    layout: Layout
}
</script>