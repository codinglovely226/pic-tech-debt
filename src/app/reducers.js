/**
 * Combine all reducers in this file and export the combined reducers.
 * If we were to do this in store.js, reducers wouldn't be hot reloadable.
 */

import { combineReducers } from 'redux-immutable';
import { connectRouter } from 'connected-react-router/immutable';

import globalReducer from 'containers/App/reducer';
import languageProviderReducer from 'containers/LanguageProvider/reducer';

/**
 * Creates the main reducer with the asynchronously loaded ones
 *
 * @param  {object}   history object
 */
export default function createReducer(history) {
  return combineReducers({
    global: globalReducer,
    language: languageProviderReducer,
    router: connectRouter(history),
  });
}
