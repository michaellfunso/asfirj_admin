

var myApp = new Vue({
    // el: '#myApp',
    data: {
        props:['title'],
    } 
})
Vue.component('table-head',{
    template: `  <thead>
    <th>Tool</th>
    <th>Remark</th>
    <th>Available Qty.</th>
    <th>Date</th>
    <th>Req. Qty.</th>                                            
    <th>Rem. Qty</th>
    
</thead>`
})

Vue.component('custom-tableRow', {
    
    data: function() {
        return {
            title: "SICK",
        }
    },
        template: 
        `<tr>
        <td><field_one is="field_one" :title='title'></field_one></td>
        <td><input type="text" class="padding-8" /></td>
        <td><input type="number" class="padding-8" readonly value="100" /></td>
        <td><input type="date" class="padding-8"  /></td>
        <td><input type="number" class="padding-8"  /></td>
        <td><input type="number" class="padding-8" readonly value="22" /></td>
        <td><button @click="$emit(\'remove\')" class='remove'>&times;</button></td>
                </tr> `,
})

Vue.component('field_one', {
    template: ` <div class="search-in-table" :key="index">
     <input type="text" class="padding-8" :key="index" />
    
    <select><option>Select tool</option>
    <option>Tool 1 - (Qty)</option>
    <option>Tool 2 - (Qty)</option>
    <option>Tool 3 - (Qty)</option>
    <option>Tool 4 - (Qty)</option>
    <option>Tool 5 - (Qty)</option>
    </select>
    <custom-list is="custom-list" />
    </div>
    `,
})

Vue.component('custom-list', {
 
    data() {
        return{
            props:['title'],
            TableRowArray: ['jjj', 'jkjk', 'agiaoag'],
            title2: "DOMParser",
        }
    },

    template: `
    <ul class="box-shadow ul padding-10 hide" :title="title">
    
    <custom-list-items v-for="(title, index) in TableRowArray" :title="title" is="custom-list-items"/>
    </ul>` ,
})

Vue.component('custom-list-items', {
    data() {
        return{
            props:['title'],
            TableRowArray: [{title:'jjj'}, 'jkjk', 'agiaoag'],
            title2: "DOMParser",
        }
    },
    template:
    `<li v-model='title' :key="index">{{title}}</li>`,
})

new Vue({
    el: '#myApp',
    data: function() {
        return{
        props:['title'],
        TableRowArray: ["jjj"]
        }
    } 
})

