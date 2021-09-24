/**
 *  Share button events
 */
const capture = document.querySelectorAll("[data-event]");
if (capture.length > 0) {
	const copyToClipboard = (node, content) => {
		navigator.clipboard
			.writeText(content)
			.then(
				() => {
					/* clipboard successfully set */
					console.log(
						`Copied text: "${content}" successfully`
					);
					addCSSclasses(node, "success");

					setTimeout(() => {
						removeCSSclasses(node, "success");
					}, 1500);
				},
				() => {
					/* clipboard write failed */
					console.log(`Copy text: "${content}" failed`);
				}
			)
			.catch((response) => {
				console.log("Error responseponse:", response);
			});
	};

	const cancelClicks = (capture) => {
		capture.forEach((node) => {
			// console.log("node", node);

			let eventValue = node.dataset.event;
			if ("copy" == eventValue) {
				let link = node.querySelector(".single__widget-link");

				link.addEventListener("click", (e) => {
					e.preventDefault();
					copyToClipboard(link, link.dataset.url);
				});

				link.addEventListener("keydown", (e) => {
					e.preventDefault();
					if (e.code != "Enter") return;

					copyToClipboard(link, link.dataset.url);
				});
			}
		});
	};

	cancelClicks(capture);
}
