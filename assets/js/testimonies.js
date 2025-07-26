// Testimonies JavaScript
let currentTestimonyIndex = 0
let totalTestimonies = 0

// Initialize when DOM is loaded
document.addEventListener("DOMContentLoaded", () => {
  totalTestimonies = document.querySelectorAll(".testimony-content").length
  updateNavigationState()
})

function showTestimony(testimonyId, index) {
  // Hide all testimonies
  const allTestimonies = document.querySelectorAll(".testimony-content")
  allTestimonies.forEach((testimony) => {
    testimony.classList.remove("active")
  })

  // Show selected testimony
  const selectedTestimony = document.getElementById("testimony-" + testimonyId)
  if (selectedTestimony) {
    selectedTestimony.classList.add("active")
  }

  // Update profile cards
  const allProfileCards = document.querySelectorAll(".profile-card")
  allProfileCards.forEach((card) => {
    card.classList.remove("active")
  })

  const selectedProfileCard = document.querySelector('[data-testimony-id="' + testimonyId + '"]')
  if (selectedProfileCard) {
    selectedProfileCard.classList.add("active")
  }

  // Update current index and navigation
  currentTestimonyIndex = index
  updateNavigationState()

  // Smooth scroll to top of testimony container on mobile
  if (window.innerWidth <= 991) {
    document.querySelector(".testimony-container").scrollIntoView({
      behavior: "smooth",
      block: "start",
    })
  }
}

function showTestimonyByIndex(index) {
  const profileCards = document.querySelectorAll(".profile-card")
  if (profileCards[index]) {
    const testimonyId = profileCards[index].getAttribute("data-testimony-id")
    showTestimony(testimonyId, index)
  }
}

function nextTestimony() {
  const nextIndex = (currentTestimonyIndex + 1) % totalTestimonies
  showTestimonyByIndex(nextIndex)
}

function previousTestimony() {
  const prevIndex = (currentTestimonyIndex - 1 + totalTestimonies) % totalTestimonies
  showTestimonyByIndex(prevIndex)
}

function updateNavigationState() {
  // Update navigation dots
  const navDots = document.querySelectorAll(".nav-dot")
  navDots.forEach((dot, index) => {
    if (index === currentTestimonyIndex) {
      dot.classList.add("active")
    } else {
      dot.classList.remove("active")
    }
  })

  // Update button states (optional: disable if at first/last)
  const prevBtn = document.querySelector(".prev-btn")
  const nextBtn = document.querySelector(".next-btn")

  // Remove disabled state (we're using circular navigation)
  prevBtn.disabled = false
  nextBtn.disabled = false
}

// Keyboard navigation
document.addEventListener("keydown", (e) => {
  if (e.key === "ArrowLeft") {
    previousTestimony()
  } else if (e.key === "ArrowRight") {
    nextTestimony()
  }
})

// Touch/swipe support for mobile
let touchStartX = 0
let touchEndX = 0

document.querySelector(".testimony-container").addEventListener("touchstart", (e) => {
  touchStartX = e.changedTouches[0].screenX
})

document.querySelector(".testimony-container").addEventListener("touchend", (e) => {
  touchEndX = e.changedTouches[0].screenX
  handleSwipe()
})

function handleSwipe() {
  const swipeThreshold = 50
  const diff = touchStartX - touchEndX

  if (Math.abs(diff) > swipeThreshold) {
    if (diff > 0) {
      // Swipe left - next testimony
      nextTestimony()
    } else {
      // Swipe right - previous testimony
      previousTestimony()
    }
  }
}
