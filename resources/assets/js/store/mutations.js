export const upStyle = (state, toStyle) => {
    return state.cateStyle = toStyle
}

export const upChoice = (state, toChoice) => {
    return state.cateChoice = toChoice
}

export const menuNav = (state, path) => {
    return state.menuSelc = path
}