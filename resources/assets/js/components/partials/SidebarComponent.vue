<template lang="html">
  <div id="parentx3" class="con-example-sidebar">
    <vs-sidebar
      style="width:200px"
      vs-static
      vs-parent="#parentx3"
      :vs-active.sync="active">

      <vs-sidebar-item @click="actives=1" :vs-active="actives==1" vs-icon="question_answer">
         Dashboard
      </vs-sidebar-item>
      <vs-sidebar-item @click="actives=2" :vs-active="actives==2" vs-icon="gavel">
         History
      </vs-sidebar-item>
      <vs-sidebar-item @click="actives=3" :vs-active="actives==3" vs-icon="verified_user">
         Settings
      </vs-sidebar-item>
      <vs-sidebar-item @click="actives=4" :vs-active="actives==4" vs-icon="account_box">
         Profile
      </vs-sidebar-item>
      <vs-sidebar-item @click="actives=5" :vs-active="actives==5" vs-icon="card_giftcard">
         card
      </vs-sidebar-item>

    </vs-sidebar>
  </div>
</template>
<script>
export default {
  data:()=>({
    active:false,
    actives:2,
  })
}
</script>

<style lang="stylus">
.con-example-sidebar
  height: 100%;
</style>