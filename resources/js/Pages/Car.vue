<template>
    <h1>My Cars</h1>
    <hr>

    <div class="d-flex justify-content-between">
        <div class="card mb-3" v-for="car in cars" :key="car.id">
            <div class="card-header bg-info">
                <h2>Brand: {{ car.brand }} </h2>
                <h5> Model: {{car.model}}</h5>

            </div>
            <div class="card-body">
                <h4>Car Details</h4>
                <ul v-for="car_detail in car.car_details" :key="car_detail.id">
                     <div class="card-header bg-info">
                    <table>
                        <tr>
                            <th> Vehicle Type:</th>
                            <td>{{ car_detail.vehicle_type }}</td>
                        </tr>
                        <tr>
                            <th> Color:</th>
                            <td>{{ car_detail.color }}</td>
                        </tr>
                        <tr>
                            <th> Price:</th>
                            <td>{{ car_detail.price }}</td>
                        </tr>
                        </table>

                     </div>
                    
                </ul>
            </div>
        </div>
    </div>
</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        cars: Array
    }
}
</script>


<style scoped>
.card {
    width: 600px;
}
</style>