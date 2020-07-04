<template>
  <div>
    {{ number }}
  </div>
</template>

<script>
export default {
  props: [
    'value',
    'field',
    'model',
    'package',
    'action'
  ],

  computed: {
    number () {
      return parseFloat(this.value).toFixed(2)
    }
  }
}
</script>
