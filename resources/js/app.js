// Custom interactive mouse follower & particles effect
document.addEventListener('DOMContentLoaded', () => {
    // 1. Interactive Cursor Follower
    const dot = document.createElement('div');
    dot.className = 'cursor-dot hidden md:block';
    
    const follower = document.createElement('div');
    follower.className = 'cursor-follower hidden md:block';

    const badge = document.createElement('div');
    badge.className = 'cursor-badge hidden md:block';
    badge.innerText = 'VIEW';

    document.body.appendChild(dot);
    document.body.appendChild(follower);
    document.body.appendChild(badge);

    let mouseX = window.innerWidth / 2;
    let mouseY = window.innerHeight / 2;
    let followerX = mouseX;
    let followerY = mouseY;
    let isMoving = false;

    window.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        dot.style.transform = `translate(${mouseX}px, ${mouseY}px) translate(-50%, -50%)`;
        isMoving = true;
    });

    // Smooth animation loop for follower
    function animateCursor() {
        followerX += (mouseX - followerX) * 0.15;
        followerY += (mouseY - followerY) * 0.15;
        follower.style.transform = `translate(${followerX}px, ${followerY}px) translate(-50%, -50%)`;
        badge.style.transform = `translate(${followerX}px, ${followerY}px) translate(-50%, -50%)`;
        requestAnimationFrame(animateCursor);
    }
    requestAnimationFrame(animateCursor);

    // Interactive elements hover state
    const interactiveElements = document.querySelectorAll('a, button, input, textarea, .interactive-hover');
    interactiveElements.forEach((el) => {
        el.addEventListener('mouseenter', () => {
            follower.classList.add('hovering');
        });
        el.addEventListener('mouseleave', () => {
            follower.classList.remove('hovering');
        });
    });

    const projectCards = document.querySelectorAll('[data-cursor-view]');
    projectCards.forEach((card) => {
        card.addEventListener('mouseenter', () => {
            follower.classList.add('hovering');
            badge.classList.add('visible');
        });
        card.addEventListener('mouseleave', () => {
            follower.classList.remove('hovering');
            badge.classList.remove('visible');
        });
    });

    // 2. Interactive Canvas Particles Background (similar to Moataz portfolio)
    const canvas = document.getElementById('particles-canvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let width = canvas.width = window.innerWidth;
        let height = canvas.height = window.innerHeight;

        const particles = [];
        const particleCount = Math.min(Math.floor(window.innerWidth / 22), 65);

        class Particle {
            constructor() {
                this.reset();
            }

            reset() {
                this.x = Math.random() * width;
                this.y = Math.random() * height;
                this.vx = (Math.random() - 0.5) * 0.45;
                this.vy = (Math.random() - 0.5) * 0.45;
                this.radius = Math.random() * 1.6 + 0.6;
                this.alpha = Math.random() * 0.5 + 0.15;
                this.baseAlpha = this.alpha;
            }

            update() {
                this.x += this.vx;
                this.y += this.vy;

                if (this.x < 0 || this.x > width) this.vx *= -1;
                if (this.y < 0 || this.y > height) this.vy *= -1;

                // Mouse interaction repulsion/attraction
                const dx = mouseX - this.x;
                const dy = mouseY - this.y;
                const dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < 130) {
                    const force = (130 - dist) / 130;
                    this.x -= (dx / dist) * force * 1.5;
                    this.y -= (dy / dist) * force * 1.5;
                    this.alpha = Math.min(1, this.baseAlpha + force * 0.6);
                } else {
                    this.alpha = this.baseAlpha;
                }
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(56, 189, 248, ${this.alpha})`;
                ctx.fill();
            }
        }

        for (let i = 0; i < particleCount; i++) {
            particles.push(new Particle());
        }

        function drawConnections() {
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);

                    if (dist < 110) {
                        const alpha = (1 - dist / 110) * 0.16;
                        ctx.strokeStyle = `rgba(99, 102, 241, ${alpha})`;
                        ctx.lineWidth = 0.8;
                        ctx.beginPath();
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            }
        }

        function render() {
            ctx.clearRect(0, 0, width, height);
            particles.forEach((p) => {
                p.update();
                p.draw();
            });
            drawConnections();
            requestAnimationFrame(render);
        }
        render();

        window.addEventListener('resize', () => {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
        });
    }

    // 3. Card 3D tilt effect on mouse move
    const tiltCards = document.querySelectorAll('.card-3d');
    tiltCards.forEach((card) => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = ((y - centerY) / centerY) * -6;
            const rotateY = ((x - centerX) / centerX) * 6;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-4px)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)';
        });
    });

    // 4. Copy email button
    const copyBtn = document.getElementById('copy-email-btn');
    if (copyBtn) {
        copyBtn.addEventListener('click', () => {
            const email = copyBtn.getAttribute('data-email') || 'melshebrawy428@gmail.com';
            navigator.clipboard.writeText(email).then(() => {
                const toast = document.getElementById('copy-toast');
                if (toast) {
                    toast.classList.remove('opacity-0', 'translate-y-2');
                    toast.classList.add('opacity-100', 'translate-y-0');
                    setTimeout(() => {
                        toast.classList.add('opacity-0', 'translate-y-2');
                        toast.classList.remove('opacity-100', 'translate-y-0');
                    }, 2200);
                }
            });
        });
    }
});
