<script setup>

import ToastListItem from '@/Components/Toast/ToastListItem.vue';
import { computed, onUnmounted } from 'vue';
import { router, usePage } from '@inertiajs/vue3';
import toast from '@/Stores/toast';

const page = computed(() => usePage().props.toast);

let removeEventListener =  router.on('finish', () => {
	if (page.value) {
		toast.add({
			message: page.value,
		});
	}
})

onUnmounted(() => removeEventListener());

</script>
<template>
	<TransitionGroup tag="ul" appear mode="out-in" name="list" class="fixed top-4 left-4 space-y-2 w-full max-w-xs z-50">

		<ToastListItem v-for="(item, index) in toast.items" :key="item.key" :message="item.message"
			@remove="toast.remove(index)" />

	</TransitionGroup>
</template>

<style scoped>
.ul {
	position: relative;
}

.list-enter-from,
.list-leave-to {
	opacity: 0;
	transform: translateX(-100%) skewX(25deg);
}

.list-enter-active,
.list-move {
	transition: 0.4s ease all;
}

.list-leave-active {
	transition: 0.4s ease all;
	position: absolute;
}
</style>