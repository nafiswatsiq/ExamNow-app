function counterHeader() {

  const counters = document.querySelectorAll('.counter')
  const speed = 1000;

  if (this.scrollY >= 500) {
    counters.forEach(counter => {
      const animate = () => {
        const value = +counter.getAttribute('data-target');
        const data = +counter.innerText;

        const time = value / speed;
        if (data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, 50);
        } else {
          counter.innerText = value;
        }

      }

      animate();
    });
  };
}
window.addEventListener('scroll', counterHeader)