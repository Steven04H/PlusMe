<template>

<vs-row vs-justify="center">
  <vs-col vs-type="flex" vs-justify="center" vs-align="center" vs-w="6">
    <vs-card>
      <div slot="header">
        <h3>
          Hello world !
        </h3>
      </div>
      <div>
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
      </div>
      <div slot="footer">
        <vs-row vs-justify="flex-end">
          <vs-button vs-type="gradient" vs-color="danger" vs-icon="favorite"></vs-button>
          <vs-button vs-color="primary" vs-icon="turned_in_not"></vs-button>
          <vs-button vs-color="rgb(230,230,230)" vs-color-text="rgb(50,50,50)" vs-icon="settings"></vs-button>
        </vs-row>
      </div>
    </vs-card>
  </vs-col>
</vs-row>

</template>
<script>
    export default {
     
        
    }
</script>