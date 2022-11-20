<template>
    <div>
        <h1>Lot Posting Lists</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Lot Number</th>
      <th scope="col">Block Number</th>
      <th scope="col">Area</th>
      <th scope="col">Price</th>
      <th scope="col">Location</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">1</td>
      <td>5</td>
      <td>200</td>
      <td>400,000</td>
      <td>Bamban, Tarlac</td>
      <td>
        <button type="button" class="btn btn-secondary">Edit</button>
        <button type="button" class="btn btn-danger">Del</button>
      </td>
    </tr>
  </tbody>
  <tr>
      <td>
        <input type="number" class="form-control" placeholder="Input Lot Number" v-model="form.lot_number">
      </td>
      <td>
        <input type="number" class="form-control" placeholder="Input Block Number" v-model="form.blk_number">
    </td>
      <td>
        <input type="number" class="form-control" placeholder="Input Area" v-model="form.area">
    </td>
      <td>
        <input type="number" class="form-control" placeholder="Input Price" v-model="form.price">
    </td>
      <td>
        <input type="text" class="form-control" placeholder="Input Location" v-model="form.location">
    </td>
      <td>
        <button type="button" class="btn btn-primary" @click="submit">Add</button>
    </td>
    </tr>
</table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form:{
                lot_number: 0,
                blk_number: 0,
                area: 0,
                price: 0,
                location: null,
            }
        }
    },
    methods: {
        submit(){
            axios.post('/lot_postings', this.form)
            .then(function (response) {
                alert('success');
            })
            .catch(function (error) {
                alert(error.response.data);
            });
        }
    },
}
</script>