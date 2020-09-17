import { selectVars, makeSelectSPI } from 'containers/App/selectors';

import { userCan } from 'utils/helpers';

/**
 * Check user is authed
 * @param  {object}   store redux store
 */
export function isAuthed(store) {
  const state = store.getState();
  const { loggedIn } = selectVars(state);

  return loggedIn;
}

/**
 * Check user can view dashboard
 * @param  {object}   store redux store
 * @param  {object}   location object from react-router
 */
export function canViewDashboard(store, location) {
  const state = store.getState();
  const { loggedIn } = selectVars(state);
  const selectSPI = makeSelectSPI();
  const userSPI = selectSPI(state);

  return loggedIn && location.pathname === '/dashboard' && userCan(userSPI, 'view data analytics');
}
