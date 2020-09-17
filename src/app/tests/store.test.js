/**
 * Test store addons
 */

import { createMemoryHistory } from 'history';
import configureStore from '../store';

const memoryHistory = createMemoryHistory();

describe('configureStore', () => {
  let store;

  beforeAll(() => {
    store = configureStore({}, memoryHistory);
  });

  describe('asyncReducers', () => {
    it('should contain an object for async reducers', () => {
      expect(typeof store.asyncReducers).toBe('object');
    });
  });

  describe('runSaga', () => {
    it('should contain a hook for `sagaMiddleware.run`', () => {
      expect(typeof store.runSaga).toBe('function');
    });
  });
});
