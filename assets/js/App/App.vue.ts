
import Vue from 'vue'
import Component from 'vue-class-component'
import Test from '../components/test/Test.vue'



@Component({
  components: {
      'Test': Test,
  }
})

export default class App extends Vue {

    mounted() {
      console.log("hello world ");
    }
}