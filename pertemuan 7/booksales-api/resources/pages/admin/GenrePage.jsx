import { useState, useEffect } from 'react';
import axios from 'axios';

function GenrePage() {
  const [genres, setGenres] = useState([]);
  const [name, setName] = useState('');

  const fetchGenres = async () => {
    const res = await axios.get('http://localhost:8000/api/genres');
    setGenres(res.data.data);
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      await axios.post('http://localhost:8000/api/genres', { name });
      setName('');
      fetchGenres();
    } catch (err) {
      console.error(err.response.data);
    }
  };

  useEffect(() => {
    fetchGenres();
  }, []);

  return (
    <div>
      <h2>Genres</h2>
      <form onSubmit={handleSubmit}>
        <input
          type="text"
          value={name}
          placeholder="Genre Name"
          onChange={(e) => setName(e.target.value)}
          required
        />
        <button type="submit">Add Genre</button>
      </form>

      <ul>
        {genres.map((genre) => (
          <li key={genre.id}>{genre.name}</li>
        ))}
      </ul>
    </div>
  );
}

export default GenrePage;
