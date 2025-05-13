function getPrimaryColor() {
	const preset = document.body.dataset.pcPreset || 'preset-1';

	const presetColors = {
		'preset-1': '#1890ff',
		'preset-2': '#3366ff',
		'preset-3': '#7265e6',
		'preset-4': '#068e44',
		'preset-5': '#3c64d0',
		'preset-6': '#f27013',
		'preset-7': '#2aa1af',
		'preset-8': '#00a854',
		'preset-9': '#009688',
		'preset-10': '#f6339a',
	};

	return presetColors[preset] || '#1890ff';
}

function showToast(message, type = 'success') {
	const primaryColor = getPrimaryColor();

	Swal.fire({
		toast: true,
		position: 'top-end',
		icon: type,
		title: message,
		showConfirmButton: false,
		timer: 3000,
		timerProgressBar: false,
		iconColor: primaryColor,
		width: '20rem',
		minHeight: '2rem',
		customClass: {
			popup: 'swal2-toast-custom',
			title: 'swal2-title-custom',
			icon: 'swal2-icon-custom',
		},
		didOpen: (toast) => {
			const iconEl = toast.querySelector('.swal2-icon');
			if (iconEl) {
				iconEl.style.color = primaryColor;
				iconEl.style.borderColor = primaryColor;
			}
		},
	});
}
