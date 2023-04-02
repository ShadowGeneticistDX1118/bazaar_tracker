# FFXII Bazaar Tracker

Final Fantasy XII has a large variety of items that can be gotten through the Bazaar system. The Bazaar keeps track of various items 

## CollectionObjects

This will keep track of the various objects that will be used in the database collections. Using Java as a way of visualizing this information as Java objects can keep track of what classes are which attributes very nicely. It makes for a very nice visual form.

### `Ingredient`

This will likely have to be a js object that is stored. Or maybe a JSON thingy. I'm not sure how 

| Type | Variable Name | Notes |
| :---: | :------ | :------ |
| `String` | name | name of the item to be sold to the bazaar |
| `int` | amount | amount needed to be sold |
| `int` | held | used only for user recipes, how many of a given item does a user have |

### Recipe

| Type | Variable Name | Notes |
|:----: | :----------- | :---- |
| `Array<Ingredient>` | ingredients | is just collection of info. It'll be nice|

### User

| Type | Variable Name | Notes |
|:----: | :----------- | :------ |
| `int` | userid | primary key for db |
| `String` | username | set by user |
| `String` | password | probably going to be a hash code of some sort 
| `Stack<SavedRecipe>` | fiveMostRecent | 5 most recently viewed recipes

### SavedRecipe

| Type | Variable Name | Notes |
|:----: | :----------- | :---- |
| `Array<Ingredient>` | ingredient | making use of the `held` attribute here |
| `int` | userid | which user this is associated with | 
